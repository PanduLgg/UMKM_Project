<?php

defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        tidak_login();
        check_admin();
        $this->load->model('M_inner');
    }
    public function index()
    {
        $data = [
            'judul' => 'Main Page',
            'barang' => $this->M_inner->tampil()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('navbar');
        $this->load->view('inner/inner', $data);
        $this->load->view('footer');
    }
}
