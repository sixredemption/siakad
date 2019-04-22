<?php

class Login_model extends CI_Model
{
    function cek_login($tabel, $where, $user, $pass)
    {
        $user = htmlspecialchars($user);
        // $pass = md5($pass);       
        // $pass = $pass;
        // $query = $this->db
        //     ->select('*')
        //     ->from($tabel)
        //     ->where($where, $user)
        //     ->where('password', $pass)
        //     ->get();
        $pass = md5($pass);
        $query  =   $this->db->where($where, $user)->where('password', $pass)->get($tabel);
        if ($query->num_rows() > 0) {
            return $query->result_object();
        } else {
            return false;
        }
    }
}
