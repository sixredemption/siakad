<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_thnAjar extends CI_Model
{
    private $_table = "tahun_ajaran";
    public $id_tahun_ajaran, $tahun_ajaran;

    public function rules()
    {
        return [
            [
                'field' => 'tahun_ajaran',
                'label' => 'Tahun Ajaran',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_tahun_ajaran)
    {
        return $this->db->get_where($this->_table, ["id_tahun_ajaran" => $id_tahun_ajaran])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_tahun_ajaran = $post["id_tahun_ajaran"];
        $this->tahun_ajaran = $post["tahun_ajaran"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //  var_dump($post);
        $this->id_tahun_ajaran = $post["id_tahun_ajaran"];
        $this->tahun_ajaran = $post["tahun_ajaran"];

        $this->db->update($this->_table, $this, array("id_tahun_ajaran" => $post["id_tahun_ajaran"]));
    }

    public function delete($id_tahun_ajaran)
    {
        return $this->db->delete($this->_table, array("id_tahun_ajaran" => $id_tahun_ajaran));
    }
}
