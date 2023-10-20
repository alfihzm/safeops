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

        // Jika Usernya ada
        if ($user) {
            // Jika Usernya aktif
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> User ini tidak aktif </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username Tidak Ditemukan </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nopeg', 'Nopeg', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Notelp', 'required|trim|integer');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            echo validation_errors();
            $data['judul'] = 'SafeOps | Registration';
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/register");
            $this->load->view("templates/auth_footer");
        } else {
            $data = [
                'nopeg' => htmlspecialchars($this->input->post('nopeg')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'photo_profile' => 'default.jpg',
                'no_telp' => htmlspecialchars($this->input->post('no_telp')),
                'date_created' => time(),
                'is_active' => 1
            ];

            $this->db->insert('user', $data);
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Logout </div>');
        redirect('auth');
    }
}
