<?php defined('BASEPATH') OR exit('No direct script access allowed') ;

class Pegawai_model extends CI_Model {
	private $_table = "pegawai" ;

	public $nip ;
	public $nama ;
	public $password ;
	public $gender ;
	public $status_user ; 

	public function rules () {
		return [
			['field' => 'nip' ,
			'label' => 'NIP' ,
			'rules' => 'required'] ,

			['field' => 'nama' ,
			'label' => 'Nama' ,
			'rules' => 'required']] ;

			
	}

	public function getAll() {
		return $this->db->get($this->_table)->result() ;
	}
}
