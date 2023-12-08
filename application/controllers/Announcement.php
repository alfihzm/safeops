<?php

class Announcement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = "Announcement";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('announcement')->result_array();

        $this->form_validation->set_rules('judul', 'announcement', 'required');
        $this->form_validation->set_rules('deskripsi', 'announcement', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('announcement/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            // Simpan data ke database
            $this->db->insert('announcement', [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'date_created' => time()
            ]);

            // Simpand data event dalam sesi
            $announ_data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal' => time(),
                'date_created' => time()
            ];

            $this->session->set_userdata('announ_data', $announ_data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengumuman Telah ditambahkan!</div>');
            redirect('announcement');
        }
    }

    public function update($ann_id)
    {
        // Validate form data
        $this->form_validation->set_rules('judul', 'announcement', 'required');
        $this->form_validation->set_rules('deskripsi', 'announcement', 'required');

        if ($this->form_validation->run() == false) {
            // Form validation failed, load the editAnnouncement view again with validation errors
            $data['judul'] = "Edit Announcement";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['announcement'] = $this->db->get_where('announcement', ['id' => $ann_id])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('announcement/editAnnouncement', $data);
            $this->load->view('templates/footer', $data);
        } else {
            // Form validation passed, update the announcement data in the database
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'date_created' => time()
            ];

            $this->db->where('id', $ann_id);
            $this->db->update('announcement', $data);

            // Set flash message for success
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengumuman Telah diperbarui!</div>');

            // Redirect back to the announcement index page
            redirect('announcement');
        }
    }

    public function delete($ann_id)
    {
        // Periksa apakah $event_id ada dalam database
        $event = $this->db->get_where('announcement', ['id' => $ann_id])->row_array();

        if ($event) {
            // Event ditemukan, lakukan operasi penghapusan di sini
            $this->db->delete('announcement', ['id' => $ann_id]);

            // Set pesan sukses
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengumuman telah dihapus!</div>');
        } else {
            // Event tidak ditemukan, set pesan kesalahan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Event tidak ditemukan!</div>');
        }

        // Redirect kembali ke halaman event
        redirect('announcement');
    }
}
