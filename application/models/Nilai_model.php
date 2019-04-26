<?php


if (!defined('BASEPATH'))
	exit('No direct script access allowed') ;

class Nilai_model extends CI_Model {

	private $_batchImport ;

	public function setBatchImport($batchImport) {
		$this->_batchImport = $batchImport ;
	}
	
	// save data
	public function importData() {
		$data = $this->_batchImport ;
		$this->db->insert_batch('C_nilai' , $data) ;
	}

	// get employee list
	public function employeeList() {
		$this->db->select(array('e.id_nilai' , 'e.id_guru' , 'e.id_kelas' , 
		'e.id_siswa' , 'e.id_mapel' , 'e.nilai_siswa')) ;
	}
}


?>
