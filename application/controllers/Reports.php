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
            'min_length' => 'Masukan laporan dengan detail!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Formulir Laporan Wajib';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
                    'shift' => $this->input->post('shift'),
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
        $data['menu'] = $this->db->get('laporanwajib')->result_array();

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
        $data['judul'] = 'Edit Laporan Wajib';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $laporan_id = $this->input->get('id') ?: $this->input->post('id');
        if (!$laporan_id) {
            redirect('reports/logwajib');
        }

        $data['laporan'] = $this->db->get_where('laporanwajib', ['id' => $laporan_id])->row_array();

        if (!$data['laporan']) {
            redirect('reports/logwajib');
        }

        // Lakukan validasi form
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            // Tampilkan view form edit jika validasi gagal
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('reports/editwajib', $data);
            $this->load->view('templates/footer');
            // ...
        } else {
            // Ambil data dari form
            $judul = $this->input->post('judul');
            $tanggal = $this->input->post('tanggal');
            $shift = $this->input->post('shift');
            $deskripsi = $this->input->post('deskripsi');
            $komentar = $this->input->post('komentar');
            $editImage = $_FILES['image']['name'];

            if ($editImage) {
                $config['upload_path'] = './assets/img/report/wajib/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '5024';
                $config['file_name'] = 'laporanwajib_' . $data['user']['nama'];

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $laporanLama = $data['laporan']['image'];
                    if ($laporanLama && $laporanLama != $editImage) {
                        unlink(FCPATH . 'assets/img/report/wajib/' . $laporanLama);
                    }
                    $laporanBaru = $this->upload->data('file_name');
                    $update_data['image'] = $laporanBaru;
                } else {
                    echo $this->upload->display_errors();
                    return; // Stop execution if upload fails
                }
            }

            $update_data = [];
            $update_data += [
                'judul' => $judul,
                'tanggal' => $tanggal,
                'deskripsi' => $deskripsi,
                'komentar' => $komentar,
                'shift' => $shift
            ];

            $this->db->set($update_data);
            $this->db->where('id', $laporan_id);
            $this->db->update('laporanwajib');

            // Tampilkan pesan sukses
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah diubah.</div>');
            redirect('reports/logwajib');
        }
    }

    public function unduhwajib()
    {
        // Ambil nilai parameter id dari URL
        // Lakukan query hanya untuk laporan dengan id tertentu atau ambil semua jika id tidak ada
        $laporan_id = $this->input->get('id') ?: $this->input->post('id');

        if ($laporan_id) {
            $laporan = $this->db->get_where('laporanwajib', ['id' => $laporan_id])->row_array();
            $laporan_name = $laporan['nama'];
            $data['laporan'] = $laporan;
        } else {
            $data['laporan'] = $this->db->get('laporanwajib')->result_array();
            $laporan_name = 'Security';
        }

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('laporanwajib')->result_array();
        $data['judul'] = "Laporan Harian" . ($laporan_name ? " $laporan_name" : ''); // Append the name if available

        $this->load->view('templates/header', $data);
        $this->load->view('reports/unduhwajib', $data);
        $this->load->view('templates/footer');
    }

    public function editrutin()
    {
        $data['judul'] = 'Edit Laporan Rutin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $laporan_id = $this->input->get('id') ?: $this->input->post('id');
        if (!$laporan_id) {
            redirect('reports/logrutin');
        }

        $data['laporan'] = $this->db->get_where('laporanrutin', ['id' => $laporan_id])->row_array();

        if (!$data['laporan']) {
            redirect('reports/logrutin');
        }

        // Lakukan validasi form
        $this->form_validation->set_rules('shift', 'shift', 'required');
        if ($this->form_validation->run() == false) {
            // Tampilkan view form edit jika validasi gagal
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('reports/editrutin', $data);
            $this->load->view('templates/footer');
            // ...
        } else {
            $tanggal = $this->input->post('tanggal');
            $shift = $this->input->post('shift');
            $listrik = $this->input->post('listrik');
            $komentar1 = $this->input->post('komentar1');
            $alarm = $this->input->post('alarm');
            $komentar2 = $this->input->post('komentar2');
            $cctv = $this->input->post('cctv');
            $komentar3 = $this->input->post('komentar3');
            $akses1 = $this->input->post('akses1');
            $akses2 = $this->input->post('akses2');
            $akses3 = $this->input->post('akses3');
            $inven1 = $this->input->post('inven1');
            $inven2 = $this->input->post('inven2');
            $inven3 = $this->input->post('inven3');
            $aset1 = $this->input->post('aset1');
            $aset2 = $this->input->post('aset2');
            $aset3 = $this->input->post('aset3');
            $deskripsi = $this->input->post('deskripsi');
            $komentar = $this->input->post('komentar');
            // Lakukan update data hanya jika ada perubahan
            $update_data = [];
            $update_data += [
                'tanggal' => $tanggal,
                'shift' => $shift,
                'listrik' => $listrik,
                'komentar1' => $komentar1,
                'alarm' => $alarm,
                'komentar2' => $komentar2,
                'cctv' => $cctv,
                'komentar3' => $komentar3,
                'akses1' => $akses1,
                'akses2' => $akses2,
                'akses3' => $akses3,
                'inven1' => $inven1,
                'inven2' => $inven2,
                'inven3' => $inven3,
                'aset1' => $aset1,
                'aset2' => $aset2,
                'aset3' => $aset3
            ];
            $this->db->set($update_data);
            $this->db->where('id', $laporan_id);
            $this->db->update('laporanrutin');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah diubah.</div>');
            redirect('reports/logrutin');
        }
    }
    public function rutin()
    {
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Masukan tanggal dengan benar!'
        ]);
        $this->form_validation->set_rules('shift', 'Shift', 'required', [
            'required' => 'Pilih jam kerja dengan benar!'
        ]);
        $this->form_validation->set_rules('listrik', 'Listrik', 'required', [
            'required' => 'Pilih salah satu kondisi listrik!'
        ]);
        $this->form_validation->set_rules('alarm', 'Alarm', 'required', [
            'required' => 'Pilih salah satu kondisi alarm!'
        ]);
        $this->form_validation->set_rules('cctv', 'CCTV', 'required', [
            'required' => 'Pilih salah satu kondisi CCTV!'
        ]);
        $this->form_validation->set_rules('akses1', 'akses1', 'required');
        $this->form_validation->set_rules('akses2', 'akses2', 'required');
        $this->form_validation->set_rules('akses3', 'akses3', 'required');
        $this->form_validation->set_rules('inven1', 'inven1', 'required');
        $this->form_validation->set_rules('inven2', 'inven2', 'required');
        $this->form_validation->set_rules('inven3', 'inven3', 'required');
        $this->form_validation->set_rules('aset2', 'aset1', 'required');
        $this->form_validation->set_rules('aset2', 'aset2', 'required');
        $this->form_validation->set_rules('aset3', 'aset3', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Formulir Pemeriksaan Rutin';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $error_message = validation_errors();
            if (!empty($error_message)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error_message . '</div>');
            }
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('reports/rutin', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('laporanrutin', [
                'nopeg' => $this->input->post('nopeg'),
                'nama' => $this->input->post('nama'),
                'tanggal' => $this->input->post('tanggal'),
                'listrik' => $this->input->post('listrik'),
                'shift' => $this->input->post('shift'),
                'komentar1' => htmlspecialchars($this->input->post('komentar1')),
                'alarm' => $this->input->post('alarm'),
                'komentar2' => $this->input->post('komentar2'),
                'cctv' => $this->input->post('cctv'),
                'komentar3' => $this->input->post('komentar3'),
                'akses1' => $this->input->post('akses1'),
                'akses2' => $this->input->post('akses2'),
                'akses3' => $this->input->post('akses3'),
                'inven1' => $this->input->post('inven1'),
                'inven2' => $this->input->post('inven2'),
                'inven3' => $this->input->post('inven3'),
                'aset1' => $this->input->post('aset1'),
                'aset2' => $this->input->post('aset2'),
                'aset3' => $this->input->post('aset3'),
                'date_created' => time()
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan rutin berhasil dikirim!</div>');
            redirect('reports');
        }
    }

    public function logrutin()
    {
        is_logged_in();

        $data['judul'] = "Daftar Laporan Rutin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('laporanrutin')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('reports/logrutin', $data);
        $this->load->view('templates/footer');
    }

    public function periksarutin()
    {
        // Ambil nilai parameter id dari URL
        $laporan_id = $this->input->get('id');
        // Lakukan query hanya untuk laporan dengan id tertentu atau ambil semua jika id tidak ada
        $data['judul'] = "Daftar Laporan Rutin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($laporan_id) {
            $data['laporan'] = $this->db->get_where('laporanrutin', ['id' => $laporan_id])->row_array();
        } else {
            $data['laporan'] = $this->db->get('laporanrutin')->result_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('reports/periksarutin', $data);
        $this->load->view('templates/footer');
    }

    public function unduhrutin()
    {
        // Ambil nilai parameter id dari URL
        // Lakukan query hanya untuk laporan dengan id tertentu atau ambil semua jika id tidak ada
        $laporan_id = $this->input->get('id') ?: $this->input->post('id');

        if ($laporan_id) {
            $laporan = $this->db->get_where('laporanrutin', ['id' => $laporan_id])->row_array();
            $laporan_name = $laporan['nama'];
            $data['laporan'] = $laporan;
        } else {
            $data['laporan'] = $this->db->get('laporanrutin')->result_array();
            $laporan_name = 'Security';
        }

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('laporanrutin')->result_array();
        $data['judul'] = "Laporan Pemeriksaan Rutin" . ($laporan_name ? " $laporan_name" : ''); // Append the name if available
        $waktuskrg = time();

        $this->load->view('templates/header', $data);
        $this->load->view('reports/unduhrutin', $data);
    }
}
