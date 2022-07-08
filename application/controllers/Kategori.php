<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_kategori');
    }

    public function index()
    {

        $data = array(
            'judul' => 'Kategori'
        );

        $data['kategori'] = $this->M_kategori->tampil_data()->result();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori/index');
        $this->load->view('layout/footer');
    }


    public function create()
    {
        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $nama_kategori,
        );

        $this->M_kategori->input_data($data, 'tb_kategori');
        redirect('kategori/index');
    }

    public function delete($id_kategori)
    {

        $where = array('id_kategori' => $id_kategori);
        $this->M_kategori->delete_data($where, 'tb_kategori');
        redirect('kategori/index');
    }

    public function edit($id_kategori)
    {
        $data = array(
            'judul' => 'Kategori'
        );
        $where = array('id_kategori' => $id_kategori);
        $data['kategori'] = $this->M_kategori->edit_data($where, 'tb_kategori')->result();

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {

        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');


        $data = array(
            'nama_kategori' => $nama_kategori,
        );

        $where = array(
            'id_kategori' => $id_kategori
        );

        $this->M_kategori->update_data($where, $data, 'tb_kategori');
        redirect('kategori/index');
    }
}
