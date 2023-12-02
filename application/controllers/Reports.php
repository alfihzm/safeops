<?php

class Reports extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Laporan Harian";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('reports/index', $data);
        $this->load->view('templates/footer');
    }

    public function wajib()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Masukkan judul dengan benar!'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Masukkan tanggal dengan benar!'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim', [
            'required' => 'Masukkan keterangan dengan jelas!',
            'valid_email' => 'Masukkan Email yang Sesuai!',
            'min_length' => 'Masukan laporan dengan detail!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Formulir Laporan Wajib';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $error_message = validation_errors();
            $error_message = validation_errors();
            if (!empty($error_message)) {
                // Hanya set flash data jika ada pesan kesalahan
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error_message . '</div>');
            }
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('reports/wajib', $data);
            $this->load->view('templates/footer');
        } else {
            // Konfigurasi upload gambar
            $config['upload_path']   = 'assets/img/report/wajib';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']      = 5024; // in kilobytes

            $this->load->library('upload', $config);

            $file_count = count(glob($config['upload_path'] . '/*'));

            if ($this->upload->do_upload('image')) {
                // Jika upload berhasil, simpan data ke database
                $upload_data = $this->upload->data();
                $original_name = $upload_data['file_name'];
                // Format nomor urutan ke dalam format '001'
                $file_count++;
                $sequence_number = sprintf("%03d", $file_count);

                // Gabungkan nomor urutan dengan nama file asli
                $new_file_name = 'laporanwajib_' . $sequence_number . '_' . $original_name;

                // Ganti nama file
                rename($config['upload_path'] . '/' . $original_name, $config['upload_path'] . '/' . $new_file_name);
                $this->db->insert('laporanwajib', [
                    'nopeg' => $this->input->post('nopeg'),
                    'nama' => $this->input->post('nama'),
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
                    'tanggal' => $this->input->post('tanggal'),
                    'komentar' => $this->input->post('komentar'),
                    'image' => $new_file_name,
                    'date_created' => time()
                ]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan harian berhasil dikirim!</div>');
                redirect('reports');
            } else {
                // Jika upload gagal, tangani kesalahan upload
                $error_message = $this->upload->display_errors();
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error_message . '</div>');
                redirect('reports/wajib'); // Redirect kembali ke halaman formulir dengan pesan kesalahan
            }
        }
    }
    public function logwajib()
    {
        is_logged_in();

        $data['judul'] = "Daftar Laporan Harian";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('laporanwajib')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('reports/logwajib', $data);
        $this->load->view('templates/footer');
    }

    public function periksawajib()
    {
        // Ambil nilai parameter id dari URL
        $laporan_id = $this->input->get('id');

        // Lakukan query hanya untuk laporan dengan id tertentu atau ambil semua jika id tidak ada
        $data['judul'] = "Daftar Laporan Harian";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($laporan_id) {
            $data['laporan'] = $this->db->get_where('laporanwajib', ['id' => $laporan_id])->row_array();
        } else {
            $data['laporan'] = $this->db->get('laporanwajib')->result_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('reports/periksawajib', $data);
        $this->load->view('templates/footer');
    }

    public function editwajib()
    {
        // Ambil nilai parameter id dari URL
        $laporan_id = $this->input->get('id');

        // Lakukan query hanya untuk laporan dengan id tertentu atau ambil semua jika id tidak ada
        $data['judul'] = "Daftar Laporan Harian";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($laporan_id) {
            $data['laporan'] = $this->db->get_where('laporanwajib', ['id' => $laporan_id])->row_array();
        } else {
            $data['laporan'] = $this->db->get('laporanwajib')->result_array();
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('reports/editwajib', $data);
            $this->load->view('templates/footer');
        } else {
            // Pastikan ID laporn tidak null sebelum memproses pembaruan
            if ($laporan_id) {
                $this->db->where('id', $laporan_id);
                $this->db->update('laporanwajib', [
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
                    'tanggal' => $this->input->post('tanggal'),
                    'komentar' => $this->input->post('komentar'),
                ]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan harian berhasil dikirim!</div>');
                redirect('reports/periksawajib');
            } else {
                // Handle jika ID tidak valid
                // ...
            }
        }
    }
}
