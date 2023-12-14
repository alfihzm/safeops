<?php
class ItemModel extends CI_Model {
    public function updateItemStatus($id, $jam_ditemukan, $status, $tanggal2) {
        $this->db->where('id', $id);
        $this->db->update('item', array('jam_ditemukan' => $jam_ditemukan, 'status' => $status, 'tanggal2' => $tanggal2));
    }
}
