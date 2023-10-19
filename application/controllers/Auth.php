<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'SafeOps | Login';
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/login");
            $this->load->view("templates/auth_footer");
        } else {
            // Kalo validasi berhasil
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        var_dump($user);
        die;
    }

    public function registration()
    {
        $this->load->view('auth/register');
    }
}
