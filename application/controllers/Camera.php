<?php
class Camera extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nopeg', 'nopeg', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alert', 'alert', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Akses CCTV";
            $data['menu'] = $this->db->get('announcement')->result_array();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            // Fetch the alert data for the view
            $data['alert_data'] = $this->db->get_where('alert', ['id' => 1])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('camera/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->db->insert('alert', [
                'nopeg' => $this->input->post('nopeg'),
                'nama' => $this->input->post('nama'),
                'date_created' => time(),
                'alert' => $this->input->post('alert')
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Peringatan Telah ditambahkan!</div>');
            redirect('camera');
        }
    }
    public function delete_alert($alert_id)
    {
        // Check if the user has the necessary permission to delete alerts (add your own permission checks)
        // For simplicity, you can check if the user is logged in
        if (!$this->session->userdata('email')) {
            redirect('auth'); // Redirect to the login page or handle unauthorized access
        }
        // Delete the alert with the specified ID
        $this->db->where('id', $alert_id);
        $this->db->delete('alert');
        // Redirect back to the camera page or update the view as needed
        redirect('camera');
    }
}
