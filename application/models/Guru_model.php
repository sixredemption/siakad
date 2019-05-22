<?php defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{

	private $_table = "guru";
	public 	$id_guru, $nig_guru, $password, $nama_lengkap,
		$asal_kota,	$tanggal_lahir,	$jenis_kelamin,
		$no_telp, $alamat, $foto = "default.jpg";


	public function rules()
	{
		return [
			[
				'field' => 'nig_guru',
				'label' => 'Nomor Induk Guru',
				'rules' => 'required'
			],

			[
				'field' => 'nama_lengkap',
				'label' => 'Nama Lengkap',
				'rules' => 'required'
			],

			['field' => 'tanggal_lahir' ,
			'label' => 'Tanggal Lahir' ,
			'rules' => 'required']
			] ;
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_guru)
	{
		return $this->db->get_where($this->_table, ["id_guru" => $id_guru])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		// var_dump($post);

		$this->nig_guru = $post["nig_guru"];
		$this->nama_lengkap = $post["nama_lengkap"];
		$this->tanggal_lahir = $post["tanggal_lahir"];
		$this->asal_kota = $post["asal_kota"];
		$this->alamat = $post["alamat"];
		$this->no_telp = $post["no_telp"];
		
		if (empty($post["password"])){
            $this->password =md5($post["nig_guru"]);
        } else {
            $this->password=md5($post["password"]) ;
        }

		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->foto = $this->_uploadImage();

		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		// var_dump($post);
		$this->id_guru = $post["id_guru"];
		$this->nig_guru = $post["nig_guru"];
		$this->nama_lengkap = $post["nama_lengkap"];
		$this->tanggal_lahir = $post["tanggal_lahir"];
		$this->asal_kota = $post["asal_kota"];
		$this->alamat = $post["alamat"];
		$this->no_telp = $post["no_telp"];
		$this->jenis_kelamin = $post["jenis_kelamin"];

		if (empty($post["password"])){
            $this->password =md5($post["nig_guru"]);
        } else {
            $this->password=md5($post["password"]) ;
        }


		if (!empty($_FILES["foto"]["name"])) {
			$this->foto = $this->_uploadImage();
		} else {
			$this->foto = $post["old_image"];
		}

		$this->db->update($this->_table, $this, array("id_guru" => $post["id_guru"]));
	}

	public function delete($id_guru)
	{
		$this->_deleteImage($id_guru);
		return $this->db->delete($this->_table, array("id_guru" => $id_guru));
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './foto/guru';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->nama_lengkap;
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

	private function _deleteImage($id_guru)
	{
		$img = $this->getById($id_guru);
		if ($img->foto != "default.jpg") {
			$filename = explode(".", $img->foto)[0];
			return array_map('unlink', glob(FCPATH . "foto/guru/$filename.*"));
		}
	}
}

