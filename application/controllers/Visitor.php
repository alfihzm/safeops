<?php

class Visitor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Laporan Tamu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['menu'] = $this->db->get('announcement')->result_array();
        $data['masuk'] = $this->db->get_where('visitor', ['status' => 'Belum keluar'])->result_array();
        $data['keluar'] = $this->db->get_where('visitor', ['status' => 'Sudah keluar'])->result_array();
        $this->form_validation->set_rules('pengunjung', 'visitor', 'required');
        $this->form_validation->set_rules('tanggal', 'visitor', 'required');
        $data['visitor_id'] = $this->input->get('id') ?: $this->input->post('id');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('visitor/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            // Simpan data ke database
            $this->db->insert('visitor', [
                'nopeg' => $this->input->post('nopeg'),
                'nama' => $this->input->post('nama'),
                'tanggal' => $this->input->post('tanggal'),
                'pengunjung' => $this->input->post('pengunjung'),
                'jam_masuk' => $this->input->post('jam_masuk'),
                'jam_keluar' => $this->input->post('jam_keluar'),
                'status' => $this->input->post('status'),
                'kategori' => $this->input->post('kategori'),
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengunjung Telah ditambahkan!</div>');
            redirect('visitor');
        }
    }
    // public function updateStatus($visitor_id)
    // {
    // In your controller (e.g., VisitorController.php)

    public function updateStatus()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masuk'] = $this->db->get_where('visitor')->result_array();
        $id = $this->input->post('id');
        $jam_keluar = $this->input->post('jam_keluar');
        $status = $this->input->post('status');
        $this->load->model('VisitorModel');
        $this->VisitorModel->updateVisitorStatus($id, $jam_keluar, $status);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengunjung Telah Keluar!</div>');
        redirect('visitor');
    }
}
