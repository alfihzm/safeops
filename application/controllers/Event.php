<?php

class Event extends CI_Controller
{
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
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('event', [
                'nama_event' => $this->input->post('nama_event'),
                'deskripsi' => $this->input->post('deskripsi')
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event Telah ditambahkan!</div>');
            redirect('event');
        }
    }
}
