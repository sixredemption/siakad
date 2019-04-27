<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_jurusan extends CI_Model
{
    private $_table = "jurusan";
    public $id_jurusan, $nama_jurusan;

    public function rules()
    {
        return [
            [
                'field' => 'nama_jurusan',
                'label' => 'Nama Jurusan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_jurusan)
    {
        return $this->db->get_where($this->_table, ["id_jurusan" => $id_jurusan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_jurusan = $post["id_jurusan"];
        $this->nama_jurusan = $post["nama_jurusan"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //  var_dump($post);
        $this->id_jurusan = $post["id_jurusan"];
        $this->nama_jurusan = $post["nama_jurusan"];

        $this->db->update($this->_table, $this, array("id_jurusan" => $post["id_jurusan"]));
    }

    public function delete($id_jurusan)
    {

        return $this->db->delete($this->_table, array("id_jurusan" => $id_jurusan));
    }
}
