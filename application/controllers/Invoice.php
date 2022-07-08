<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        tidak_login();
        $this->load->helper('url');
        $this->load->model('M_invoice');
    }
    public function index()
    {
        $data = [
            'judul' => 'Invoice',
            'invoice' => $this->M_invoice->tampil_data()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('invoice/index');
        $this->load->view('layout/footer');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_invoice->delete_data($where, 'tb_invoice');
        redirect('invoice/index');
    }
}
