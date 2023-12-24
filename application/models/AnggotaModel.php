<?php
class AnggotaModel extends CI_Model
{
    public function getAnggota()
    {
        $query = $this->db->get('user');
        return $query->num_rows();
    }

    public function getAnggotaByRole($role_id, $limit, $offset)
    {
        $query = $this->db->get_where('user', ['role_id' => $role_id], $limit, $offset);

        return $query->result_array();
    }


    public function tambahAnggota($data)
    {
        if ($this->db->insert('user', $data)) {
            return true;
        } else {
            $error = $this->db->error();
            if ($error['code'] == 1062) {
                echo 'Error: No. Pegawai sudah ada dalam database';
            } else {
                echo 'Database Error (' . $error['code'] . '): ' . $error['message'];
            }
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

    public function getJumlahAnggota($user = null)
    {
        return $this->db->get_where('user', $user);
    }

    public function hapusAnggota($id)
    {
    }
}
