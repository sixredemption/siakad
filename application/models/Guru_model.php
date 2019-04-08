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
		
	}
}
