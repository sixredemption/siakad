<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_Profileguru extends CI_Model {


public function update($data, $id_guru)
    {
        $this->db->where($this->id, $id_guru);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function get_by_id($id_guru)
    {
        $this->db->select('guru');
        $this->db->where($this->id, $id_guru);
        $query = $this->db->get();
        return $query->row();
    }

}

