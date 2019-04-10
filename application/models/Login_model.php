<?php

class Login_model extends CI_Model
{
    function cek_login($user, $pass)
    {
        // return $this->db->get_where($tabel, $where);
        $query = $this->db->select('*')
            ->from('guru')
            ->where('username', $user)
            ->where('password', $pass)
            ->limit(1)
            ->get();
        if ($query->num_rows() == 1) {
            return $query->result_object();
        } else {
            return false;
        }
    }
}
