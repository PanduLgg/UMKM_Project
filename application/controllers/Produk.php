<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Produk extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_produk');
    }
    public function index()
    {
        $data = [
            'judul' => 'Produk',
            'barang' => $this->M_produk->tampil()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Produk/index', $data);
        $this->load->view('layout/footer');
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->M_produk->find($id);
        $data = [
            'id'      => $barang->kode_barang,
            'qty'     => 1,
            'price'   => $barang->harga_jual,
            'name'    => $barang->nama_barang,
        ];

        $this->cart->insert($data);
        redirect('/Produk');
    }
    public function detail_keranjang()
    {

        $data = [
            'judul' => 'Data Belanja',
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('data_belanja/index');
        $this->load->view('layout/footer');
    }
    public function hapus()
    {
        $this->cart->destroy();
        redirect('/Produk/index');
    }
    public function checkout()
    {
        $data = [
            'judul' => 'Pembayaran',
            'satuan' => $this->db->get('tb_satuan')->result()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Bayar/index');
        $this->load->view('layout/footer');
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
            $this->load->view('layout/header', $data);
            $this->load->view('layout/navbar');
            $this->load->view('layout/sidebar');
            $this->load->view('Bayar/proses');
            $this->load->view('layout/footer');
        } else {
            echo "Maaf Pesanan anda gagal diproses";
        }
    }
}
