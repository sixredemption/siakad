<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    private $_table = "siswa";
    public $id;
    public $nis;
    public $nama;
    public $tgl_lahir;
    public $kota_asl;
    public $gender;
    public $kelas;
    public $id_jurusan;
    public $alamat;
    public $no_telp;
    public $password;
    public $foto = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'nis',
                'label' => 'Nis',
                'rules' => 'required'
            ],

            [
                'field' => 'gender',
                'label' => 'Gender',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->kota_asl = $post["kota_asl"];
        $this->gender = $post["gender"];
        $this->kelas = $post["kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->password = $post["password"];
        $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id = $post["id"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->kota_asl = $post["kota_asl"];
        $this->gender = $post["gender"];
        $this->kelas = $post["kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->password = $post["password"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id" => $post["id"]));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/siswa';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama;
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

    private function _deleteImage($id)
    {
        $img = $this->getById($id);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/siswa/$filename.*"));
        }
    }
}
