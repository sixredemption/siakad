<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengumuman extends CI_Model
{
    private $_table = "pengumuman";
    public  $id_pengumuman, $judul,
        $tanggal, $keterangan, $foto = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_pengumuman)
    {
        return $this->db->get_where($this->_table, ["id_pengumuman" => $id_pengumuman])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->judul = $post["judul"];
        $this->tanggal = $post["tanggal"];
        $this->keterangan = $post["keterangan"];
        $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //  var_dump($post);
        $this->id_pengumuman = $post["id_pengumuman"];
        $this->judul = $post["judul"];
        $this->tanggal = $post["tanggal"];
        $this->keterangan = $post["keterangan"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_pengumuman" => $post["id_pengumuman"]));
    }

    public function delete($id_pengumuman)
    {
        $this->_deleteImage($id_pengumuman);
        return $this->db->delete($this->_table, array("id_pengumuman" => $id_pengumuman));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets_home/img/blog/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->judul;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_pengumuman)
    {
        $img = $this->getById($id_pengumuman);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "assets_home/img/blog/$filename.*"));
        }
    }
}
