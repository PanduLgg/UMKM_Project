<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Inner extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        tidak_login();
        $this->load->model('M_inner');
    }
    public function index()
    {
        $data = [
            'judul' => 'Main Page',
            'barang' => $this->M_inner->tampil(),
            'kategori' => $this->db->get('tb_kategori')->result(),
            'satuan ' => $this->db->get('tb_satuan')->result()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('navbar');
        $this->load->view('inner/inner', $data);
        $this->load->view('footer');
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->M_inner->find($id);
        $data = [
            'id'        => $barang->kode_barang,
            'qty'       => 1,
            'price'     => $barang->harga_jual,
            'name'      => $barang->nama_barang,
            'satbar'    => $barang->id_satuan,
        ];

        $this->cart->insert($data);
        redirect('/Inner');
    }
    public function detail_keranjang()
    {

        $data = [
            'judul' => 'Data Belanja',
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('navbar');
        $this->load->view('inner/detail');
        $this->load->view('templates/footer');
    }
    public function hapus()
    {
        $this->cart->destroy();
        redirect('/Inner');
    }
    public function checkout()
    {
        $data = [
            'judul' => 'Pembayaran',
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('navbar');
        $this->load->view('inner/bayar');
        $this->load->view('templates/footer');
    }
    public function proses()
    {
        $this->load->model('M_invoice');
        $prosessed = $this->M_invoice->index();
        if ($prosessed) {
            $data = [
                'judul' => 'Pembayaran',
            ];
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('navbar');
            $this->load->view('inner/proses');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf Pesanan anda gagal diproses";
        }
    }
}
