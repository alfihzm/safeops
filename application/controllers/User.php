<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($user) {
            echo 'Selamat Datang ' . $user['nama'];
        } else {
            echo 'Selamat Datang, Pengguna Tidak Ditemukan';
        }
    }
}
