<?php

class Maps extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Akses Peta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('maps/index', $data);
        $this->load->view('templates/footer');
    }
}
