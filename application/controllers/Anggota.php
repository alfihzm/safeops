<?php
class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Daftar Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->AnggotaModel->getAnggotaByRole(2);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahAnggota()
    {
        $this->form_validation->set_rules('nopeg', 'Nopeg', 'required|trim', [
            'required' => 'Masukkan No. Pegawai dengan Benar!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Masukkan Nama dengan Benar!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Masukkan Email dengan Benar!',
            'valid_email' => 'Masukkan Email yang Sesuai!'
        ]);
        // Set aturan validasi lainnya

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Tambah Anggota';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/tambahAnggota', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nopeg'         => htmlspecialchars($this->input->post('nopeg')),
                'nama'          => htmlspecialchars($this->input->post('nama')),
                'email'         => htmlspecialchars($this->input->post('email')),
                'username'      => htmlspecialchars($this->input->post('username')),
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id'       => 2,
                'photo_profile' => 'default2.jpg',
                'no_telp'       => htmlspecialchars($this->input->post('no-telp')),
                'date_created'  => time(),
                'is_active'     => 1,
            ];

            $this->load->model('AnggotaModel');
            $this->AnggotaModel->tambahAnggota($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anggota Telah ditambahkan!</div>');
            redirect('anggota');
        }
    }

    public function hapusAnggota($id)
    {
        $anggota = $this->db->get_where('user', ['id' => $id])->row_array();

        if ($anggota) {
            $this->db->delete('user', ['id' => $id]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anggota telah dihapus!</div>');
            redirect('anggota');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anggota gagal dihapus!</div>');
        }
    }
}
