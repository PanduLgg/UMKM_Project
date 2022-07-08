<?php
class M_regist extends CI_Model
{
    public function tambah($username, $password,  $email, $name, $address, $level)
    {
        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'name' => $name,
            'address' => $address,
            'level' => $level,
        );
        $this->db->insert('user', $data);
    }
}
