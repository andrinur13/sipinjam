<?php

class UserModel extends CI_Model
{
    public function getUserByEmail($email) {
        if($email == null) {
            return null;
        }

        $userData = $this->db->get_where('user', ['email' => $email])->row_array();
        if($userData == null) {
            return null;
        }

        return $userData;
    }

    public function insertUser($data) {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }
}