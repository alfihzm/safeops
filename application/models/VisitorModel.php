<?php
class VisitorModel extends CI_Model
{
    public function updateVisitorStatus($id, $jam_keluar, $status)
    {
        $this->db->where('id', $id);
        $this->db->update('visitor', array('jam_keluar' => $jam_keluar, 'status' => $status));
    }

    public function getJumlahVisitor($visitor = null)
    {
        return $this->db->get_where('visitor', $visitor);
    }
}
