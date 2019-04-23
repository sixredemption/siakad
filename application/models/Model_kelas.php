<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
    private $_table = "kelas";
    public $id_kelas;
    public $id_jurusan;
    public $nama_kelas;

    public function rules()
    {
        return [
            [
                'field' => 'nama_kelas',
                'label' => 'nama_kelas',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_kelas)
    {
        return $this->db->get_where($this->_table, ["id_kelas" => $id_kelas])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jurusan = $post["id_jurusan"];
        $this->nama_kelas = $post["nama_kelas"];
        
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //  var_dump($post);
        $this->id_kelas = $post["id_kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        $this->nama_kelas = $post["nama_kelas"];
        
        $this->db->update($this->_table, $this, array("id_kelas" => $post["id_kelas"]));
    }

    public function delete($id_kelas)
    {
        $this->_deleteImage($id_kelas);
        return $this->db->delete($this->_table, array("id_kelas" => $id_kelas));
    }

}
