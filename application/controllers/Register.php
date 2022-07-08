<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_regist');
    }

    public function index()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $alamat = $this->input->post('alamat');
        $level = $this->input->post('level');
        $this->model_regis->tambah($username,  $password, $email,  $name, $alamat, $level);
        redirect('regis/member');
    }
    public function member()
    {
        $data = array('title' => "Register");
        $this->load->view('register', $data);
    }
    public function tambah()
    {
        $this->load->view('register');
    }
}
