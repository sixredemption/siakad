<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    private $_table = "siswa";
    public $id_siswa;
    public $id_kelas;
    public $nisn;
    public $password;
    public $nama_siswa;
    public $kota;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $no_telp;
    public $alamat;
    public $foto = "default.jpg";
    public $id_jurusan;


    public function rules()
    {
        return [
            [
                'field' => 'nama_siswa',
                'label' => 'nama_siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'nisn',
                'label' => 'nisn',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_siswa)
    {
        return $this->db->get_where($this->_table, ["id_siswa" => $id_siswa])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kelas = $post["id_kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        $this->nisn = $post["nisn"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->kota = $post["kota"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->no_telp = $post["no_telp"];
        $this->alamat = $post["alamat"];
        $this->password=md5($post["password"]);
        $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_siswa = $post["id_siswa"];
        $this->id_kelas = $post["id_kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        $this->nisn = $post["nisn"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->kota = $post["kota"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->no_telp = $post["no_telp"];
        $this->alamat = $post["alamat"];
        

        if (empty($post["password"])){
            $this->password =md5($post["nisn"]);
        } else {
            $this->password=md5($post["password"]) ;
        }

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_siswa" => $post["id_siswa"]));
    }

    public function delete($id_siswa)
    {
        $this->_deleteImage($id_siswa);
        return $this->db->delete($this->_table, array("id_siswa" => $id_siswa));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/siswa';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_siswa;
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

    private function _deleteImage($id_siswa)
    {
        $img = $this->getById($id_siswa);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/siswa/$filename.*"));
        }
    }
}
