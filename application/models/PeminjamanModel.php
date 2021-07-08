<?php

class PeminjamanModel extends CI_Model
{
    public function getAllPeminjaman() {
        return $this->db->get('peminjaman')->result_array();
    }
    
    public function getPeminjamanByUser($id_user)
    {

        $this->db->select('*');
        $this->db->from('fasilitas');
        $this->db->join('peminjaman', 'peminjaman.id_fasilitas = fasilitas.id_fasilitas');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get()->result_array();

        if($query == null) {
            return null;
        }

        return $query;
    }

    public function addPeminjaman($data)
    {
        $this->db->insert('peminjaman', $data);
        return $this->db->affected_rows();
    }

    
}
