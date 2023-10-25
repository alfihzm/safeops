<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    private function getGreeting()
    {
    }

    public function index()
    {
        $data['judul'] = "Dashboard | SafeOps";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Tambahkan kode ini untuk mengambil data event dari sesi
        $event_data = $this->session->userdata('event_data');
        $data['event_data'] = $event_data;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
