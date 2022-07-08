<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{

    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_supplier');
    }

    public function index()
    {

        $data = array(
            'judul' => 'Supplier'
        );
        $data['supplier'] = $this->M_supplier->tampil_data()->result();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('supplier/index');
        $this->load->view('layout/footer');
    }


    public function create()
    {
        $id_satuan = $this->input->post('id_satuan');
        $nama_satuan = $this->input->post('nama_satuan');
        $kota = $this->input->post('kota');
        $telepon = $this->input->post('telepon');
        $kontak = $this->input->post('kontak');
        $alamat = $this->input->post('alamat');

        $data = array(
            'id_satuan' => $id_satuan,
            'nama_satuan' => $nama_satuan,
            'kota'      => $kota,
            'telepon' => $telepon,
            'kontak' => $kontak,
            'alamat' => $alamat,
        );

        $this->M_supplier->input_data($data, 'tb_satuan');
        redirect('supplier/index');
    }

    public function delete($id_satuan)
    {

        $where = array('id_satuan' => $id_satuan);
        $this->M_supplier->delete_data($where, 'tb_satuan');
        redirect('supplier/index');
    }

    public function edit($id_satuan)
    {
        $data = array(
            'judul' => 'Edit Supplier'
        );


        $where = array('id_satuan' => $id_satuan);
        $data['supplier'] = $this->M_supplier->edit_data($where, 'tb_satuan')->result();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('supplier/edit');
        $this->load->view('layout/footer');
    }

    public function update()
    {

        $id_satuan = $this->input->post('id_satuan', true);
        $nama_satuan = $this->input->post('nama_satuan', true);
        $kota = $this->input->post('kota', true);
        $telepon = $this->input->post('telepon', true);
        $kontak = $this->input->post('kontak', true);
        $alamat = $this->input->post('alamat', true);

        $data = array(
            'nama_satuan' => $nama_satuan,
            'kota' => $kota,
            'telepon' => $telepon,
            'kontak' => $kontak,
            'alamat' => $alamat,
        );

        $where = array(
            'id_satuan' => $id_satuan
        );

        $this->M_supplier->update_data($where, $data, 'tb_satuan');
        redirect('supplier/index');
    }
}
