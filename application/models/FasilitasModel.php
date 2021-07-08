<?php

class FasilitasModel extends CI_Model
{

    public function getAllFasilitas()
    {
        return $this->db->get('fasilitas')->result_array();
    }

    public function getFasilitasByID($id)
    {
        return $this->db->get_where('fasilitas', ['id_fasilitas' => $id])->row_array();
    }

    public function incrementFasilitas($amount, $id)
    {
        $fasilitas = $this->db->get_where('fasilitas', ['id_fasilitas' => $id])->row_array();
        $banyak = $fasilitas['ready_amount'];
        $update = $banyak + $amount;
        return $this->db->update('fasilitas', ['ready_amount' => $update], ['id_fasilitas', $id]);
    }

    public function decrementFasilitas($amount, $id)
    {
        $fasilitas = $this->db->get_where('fasilitas', ['id_fasilitas' => $id])->row_array();
        $banyak = $fasilitas['ready_amount'];
        $update = $banyak - $amount;

        $this->db->set('ready_amount', $update);
        $this->db->where('id_fasilitas', $id);
        $this->db->update('fasilitas');

        return;
    }

    public function addFasilitas($data) {
        return $this->db->insert('fasilitas', $data);
    }
}
