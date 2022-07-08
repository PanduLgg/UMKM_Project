<?php
defined('BASEPATH') or exit('No direct script access allowed');

function sudah_login()
{
    $ci = &get_instance();
    $user = $ci->session->userdata('userid');
    if ($user) {
        redirect('/Dashboard');
    }
}
function tidak_login()
{
    $ci = &get_instance();
    $user = $ci->session->userdata('userid');
    if (!$user) {
        redirect('/Login');
    }
}
function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('acces');
    if ($ci->acces->nama_login()->level == 1) {
        redirect('/Dashboard');
    } elseif ($ci->acces->nama_login()->level == 2) {
        redirect('/Inner');
    } else {
        redirect('/Login');
    }
}
