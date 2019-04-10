<?php

class Login_model extends CI_Model
{
    function cek_login($tabel, $user, $pass)
    {
        $u = htmlspecialchars($user);
        $p = md5($pass);
        $query = $this->db
            ->select('*')
            ->from($tabel)
            ->where('username', $u)
            ->where('password', $p)
            ->get();
        if ($query->num_rows() > 0) {
            return $query->result_object();
        } else {
            return false;
        }
    }
}
