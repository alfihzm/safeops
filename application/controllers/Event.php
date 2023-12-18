<?php

class Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = "Event Management";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('event')->result_array();

        $this->form_validation->set_rules('nama_event', 'Event', 'required');
        $this->form_validation->set_rules('deskripsi', 'Event', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('event/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            // Simpan data ke database
            $this->db->insert('event', [
                'nama_event' => $this->input->post('nama_event'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal' => $this->input->post('tanggal'),
                'jam_mulai' => $this->input->post('jam_mulai'),
                'jam_selesai' => $this->input->post('jam_selesai')
            ]);

            // Simpan data event dalam sesi
            $event_data = [
                'nama_event' => $this->input->post('nama_event'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal' => $this->input->post('tanggal'),
                'jam_mulai' => $this->input->post('jam_mulai'),
                'jam_selesai' => $this->input->post('jam_selesai')
            ];

            $this->session->set_userdata('event_data', $event_data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event Telah ditambahkan!</div>');
            redirect('event');
        }
    }

    public function update($event_id)
    {
        $this->form_validation->set_rules('nama_event', 'Event', 'required');
        $this->form_validation->set_rules('deskripsi', 'Event', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Edit Event";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['event'] = $this->db->get_where('event', ['id' => $event_id])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('event/editEvent', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->db->where('id', $event_id);
            $this->db->update('event', [
                'nama_event' => $this->input->post('nama_event'),
                'deskripsi' => $this->input->post('deskripsi')
            ]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event Telah diperbarui!</div>');
            redirect('event');
        }
    }

    public function delete($event_id)
    {
        $event = $this->db->get_where('event', ['id' => $event_id])->row_array();

        if ($event) {
            $this->db->delete('event', ['id' => $event_id]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event telah dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Event tidak ditemukan!</div>');
        }
        redirect('event');
    }
}
