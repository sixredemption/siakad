<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Guru_Controller extends CI_Core {

public function updateProfile() {

	if ($this->userdata != '') {
		$data = $this->Model_Profileguru->select($this->userdata->id) ;
		
		$this->session->set_userdata('userdata' , $data) ;
		$this->userdata = $this->session->userdata('userdata') ;
	}

}

}
