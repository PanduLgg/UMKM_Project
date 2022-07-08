<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        sudah_login();
        $data = [
            'judul' => ('LOGIN')
        ];
        $this->load->view('Login/login', $data);
    }
    public function auth()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $query = $this->M_login->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $data = [
                    'userid' => $row->user_id,
                    'level' => $row->level
                ];
                if ($row->level == 2) {
                    $this->session->set_userdata($data);
                    echo "<script>alert('selamat login berhasil');
                window.location='" . site_url('/inner') . "';
                </script>";
                } else {
                    $this->session->set_userdata($data);
                    echo "<script>alert('selamat login berhasil');
                window.location='" . site_url('/dashboard') . "';
                </script>";
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert" >
                Password atau Username Salah!
                </div>');
                redirect('Login');
            }
        }
    }
    public function logout()
    {
        tidak_login();
        $data = ['userid', 'level'];
        $this->session->sess_destroy($data);
        echo "<script>alert('Anda berhasil Logout!');
                window.location='" . site_url('/Home') . "';
                </script>";
    }
}
