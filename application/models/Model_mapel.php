<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_mapel extends CI_Model
{
    private $_table = "mapel";
    public $id_mapel, $nama_mapel;

    public function rules()
    {
        return [
            [
                'field' => 'nama_mapel',
                'label' => 'Nama Mapel',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_mapel)
    {
        return $this->db->get_where($this->_table, ["id_mapel" => $id_mapel])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_mapel = $post["id_mapel"];
        $this->nama_mapel = $post["nama_mapel"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //  var_dump($post);
        $this->id_mapel = $post["id_mapel"];
        $this->nama_mapel = $post["nama_mapel"];

        $this->db->update($this->_table, $this, array("id_mapel" => $post["id_mapel"]));
    }

    public function delete($id_mapel)
    {
        return $this->db->delete($this->_table, array("id_mapel" => $id_mapel));
    }
}
