<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_spp extends CI_Model
{
    private $_table = "spp";
    public $id_spp;
    public $id_siswa;
    public $id_kelas;
    public $id_bulan;
    public $id_semester;
    public $id_tahun_ajaran;
    public $status;

    public function rules()
    {
        return [
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_spp)
    {
        return $this->db->get_where($this->_table, ["id_spp" => $id_spp])->row();
    }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->id_kelas = $post["id_kelas"];
    //     $this->id_jurusan = $post["id_jurusan"];
    //     $this->nisn = $post["nisn"];
    //     $this->nama_siswa = $post["nama_siswa"];
    //     $this->kota = $post["kota"];
    //     $this->tanggal_lahir = $post["tanggal_lahir"];
    //     $this->jenis_kelamin = $post["jenis_kelamin"];
    //     $this->no_telp = $post["no_telp"];
    //     $this->alamat = $post["alamat"];
    //     $this->password=md5($post["password"]);
    //     $this->foto = $this->_uploadImage();


    //     $this->db->insert($this->_table, $this);
    // }

    public function update()
    {
        $post = $this->input->post();
        var_dump($post);
        $this->id_spp = $post["id_spp"];
        $this->status = $post["status"];

        $this->db->update($this->_table, $this, array("id_spp" => $post["id_spp"]));
    }

    // public function delete($id_spp)
    // {
    //     $this->_deleteImage($id_spp);
    //     return $this->db->delete($this->_table, array("id_spp" => $id_spp));
    // }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './foto/siswa';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->nama_siswa;
    //     $config['overwrite']            = true;
    //     $config['max_size']             = 1024; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('foto')) {
    //         return $this->upload->data("file_name");
    //     }

    //     return "default.jpg";
    // }

    // private function _deleteImage($id_spp)
    // {
    //     $img = $this->getById($id_spp);
    //     if ($img->foto != "default.jpg") {
    //         $filename = explode(".", $img->foto)[0];
    //         return array_map('unlink', glob(FCPATH . "foto/siswa/$filename.*"));
    //     }
    // }
}
