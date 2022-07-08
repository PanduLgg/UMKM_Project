<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'User Login';
            $this->load->view('login/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'userid' => $user['userid'],
                        'level' => $user['level'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
                    Wrong password!</small></div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
                Email not activated yet!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
            Email is not Valid!</div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username sudah digunakan!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'User Registration';
            $this->load->view('register', $data);
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', 'true')),
                'password' => sha1($this->input->post('password1')),
                'email' => htmlspecialchars($this->input->post('email', 'true')),
                'name' => htmlspecialchars($this->input->post('name', 'true')),
                'address' => htmlspecialchars($this->input->post('address', 'true')),
                'is_active' => 1,
                'level' => 2,
                'date_create' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun anda sudah dibuat! Silahkan Login!
            </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
            Logout Success!
        </div>');
        redirect('auth');
    }
}
