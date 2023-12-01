<?php
class AnggotaModel extends CI_Model
{
    public function getAnggota()
    {
        // Mengambil data dari tabel anggota
        $query = $this->db->get('user');

        // Mengembalikan hasil dalam bentuk array
        return $query->result_array();
    }

    public function getAnggotaByRole($role_id)
    {
        $query = $this->db->where('role_id', $role_id);
        $query = $this->db->get('user');

        return $query->result_array();
    }

    public function tambahAnggota($data)
    {
        if ($this->db->insert('user', $data)) {
            return true;
        } else {
            // Check for database errors
            $error = $this->db->error();
            echo 'Database Error (' . $error['code'] . '): ' . $error['message'];
            return false;
        }
    }

    public function getAnggotaById($id)
    {
        $query = $this->db->get_where('user', ['id' => $id]);
        return $query->row_array();
    }

    public function editAnggota($id, $data)
    {
        $this->db->where('id', $id);
        if ($this->db->update('user', $data)) {
            return true;
        } else {
            $error = $this->db->error();
            echo 'Database Error (' . $error['code'] . '): ' . $error['message'];
            return false;
        }
    }

    public function hapusAnggota($id)
    {
    }
}
