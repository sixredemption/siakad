<?php

class Login_model extends CI_Model
{
    function cek_login($user, $pass)
    {
        // return $this->db->get_where($tabel, $where);
        $u = htmlspecialchars($user);
        $p = md5($pass);
        $us = $this->db->escape_str($u);
        $ps = $this->db->escape_str($p);
        $query = $this->db->select('*')
            ->from('admin')
            ->where('username', $us)
            ->where('password', $ps)
            ->limit(1)
            ->get();
        if ($query->num_rows() == 1) {
            return $query->result_object();
        } else {
            return false;
        }
    }
}
