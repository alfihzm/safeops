<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('AnggotaModel');
    }

    public function index()
    {
        $data['judul'] = 'SafeOps';
        $data['jumlahAnggota'] = $this->AnggotaModel->getJumlahAnggota(['role_id' => 2])->num_rows();

        $this->load->view('welcome/index', $data);
    }
}
