<?php defined('BASEPATH') OR exit('No direct script access allowed') ;

class Guru_model extends CI_Model {
	private $_table = "guru" ;

	public $nig ;
	public $nama ;
	public $tgl_lahir ;
	public $kota_asl;
	public $gender ;
	public $alamat ;
	public $no_telp ;
	public $password ;
	public $id_pelajaran ;
	public $status_user ; 

	public function rules () {
		return [
			['field' => 'nig' ,
			'label' => 'NIG' ,
			'rules' => 'required'] ,

			['field' => 'nama' ,
			'label' => 'Nama' ,
			'rules' => 'required'] ,

			['field' => 'tgl_lahir' ,
			'label' => 'Tanggal Lahir' ,
			'rules' => 'required']] ;
	}

	public function getAll() {
		return $this->db->get($this->_table)->result() ;
	}

	public function getById($id) {
		return $this->db->get_where($this->_table , ["id"])->row() ;
	}

	public function save() {
		$post = $this->input->post() ;
		$this->nig = $post["nig"] ;
		$this->nama = $post["nama"] ;
		$this->tgl_lahir = $post["tgl_lahir"] ;
		$this->kota_asl = $post["kota_asl"] ;
		$this->gender = $post["gender"] ;
		$this->alamat = $post["alamat"] ;
		$this->no_telp = $post["no_telp"] ;
		$this->password = $post["password"] ;
		$this->id_pelajaran = $post["id_pelajaran"] ;
		$this->status_user = $post["status_user"] ;
		$this->db->insert($this->_table , $this) ;
	}

	public function update() {
		$post = $this->input->post() ;
		$this->id = $post["id"] ;
		$this->nig = $post["nig"] ;
		$this->nama = $post["nama"] ;
		$this->tgl_lahir = $post["tgl_lahir"] ;
		$this->kota_asl = $post["kota_asl"] ;
		$this->gender = $post["gender"] ;
		$this->alamat = $post["alamat"] ;
		$this->no_telp = $post["no_telp"] ;
		$this->password = $post["password"] ;
		$this->id_pelajaran = $post["id_pelajaran"] ;
		$this->status_user = $post["status_user"] ;
		$this->db->update($this->_table , $this , array('id' => $post['id'])) ;
	}
}
