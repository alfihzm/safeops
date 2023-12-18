<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        $this->load->model('ReportModel');
        $this->load->model('VisitorModel');
        $this->load->model('ItemModel');
    }

    public function index()
    {
        $data['judul'] = "SafeOps";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu2'] = $this->db->get('announcement')->result_array();
        $data['menu'] = $this->db->get('event')->result_array();
        $data['jumlahAnggota'] = $this->AnggotaModel->getJumlahAnggota(['role_id' => 2])->num_rows();
        $data['jumlahLaporan'] = $this->ReportModel->getJumlahLaporan()->num_rows();
        $data['jumlahVisitor'] = $this->VisitorModel->getJumlahVisitor()->num_rows();
        $data['jumlahBarang']  = $this->ItemModel->getJumlahBarangHilang()->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
