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
	}
}


?>
