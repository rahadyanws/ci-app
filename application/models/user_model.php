<?php

class User_model extends CI_Model {

    public function get_users($user_id) {
        $this->db->where(['id' => $user_id]);
        $query = $this->db->get('users');
//        $query = $this->db->query("SELECT * FROM users");
//        $this->db->where("id", $user_id);
        return $query->result();
    }
}