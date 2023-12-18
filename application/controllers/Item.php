<?php
class Item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Laporan Kehilangan Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['belum'] = $this->db->get_where('item', ['status' => 'Belum ditemukan'])->result_array();
        $data['sudah'] = $this->db->get_where('item', ['status' => 'Sudah ditemukan'])->result_array();
        $this->form_validation->set_rules('shift', 'item', 'required');
        $this->form_validation->set_rules('jenis', 'item', 'required');
        $this->form_validation->set_rules('ciri', 'item', 'required');
        $this->form_validation->set_rules('jam_hilang', 'item', 'required');
        $this->form_validation->set_rules('tanggal', 'item', 'required');
        $data['item_id'] = $this->input->get('id') ?: $this->input->post('id');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('item/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->db->insert('item', [
                'nopeg' => $this->input->post('nopeg'),
                'nama' => $this->input->post('nama'),
                'tanggal' => $this->input->post('tanggal'),
                'pemilik' => $this->input->post('pemilik'),
                'shift' => $this->input->post('shift'),
                'jenis' => $this->input->post('jenis'),
                'merk' => $this->input->post('merk'),
                'ciri' => $this->input->post('ciri'),
                'jam_hilang' => $this->input->post('jam_hilang'),
                'jam_ditemukan' => $this->input->post('jam_ditemukan'),
                'status' => $this->input->post('status')
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hilang Telah ditambahkan!</div>');
            redirect('item');
        }
    }
    public function updateStatus()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masuk'] = $this->db->get_where('item')->result_array();
        $id = $this->input->post('id');
        $jam_ditemukan = $this->input->post('jam_ditemukan');
        $status = $this->input->post('status');
        $tanggal2 = $this->input->post('tanggal2');
        $this->load->model('ItemModel');
        $this->ItemModel->updateItemStatus($id, $jam_ditemukan, $status, $tanggal2);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data barang telah diperbarui!</div>');
        redirect('item');
    }

    public function unduhitem()
    {
        $data['judul'] = "Laporan Barang Hilang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sudah'] = $this->db->get_where('item', ['status' => 'Sudah ditemukan'])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('item/unduhitem', $data);
        $this->load->view('templates/footer', $data);
    }
}
