<?php

class ReportModel extends CI_Model
{
    public function getJumlahLaporan($laporan = null)
    {
        return $this->db->get_where('laporanrutin', $laporan);
    }
}