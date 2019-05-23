<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Profile extends CI_Core {

	public function updateProfile() {

		if ($this->userdata != '') {
			$data = $this->model_Profileguru->select($this->userdata->id) ;

			$this->session->set_userdata('userdata' , $data) ;
			$this->userdata = $this->session->userdata('userdata') ;
		}
	}

}
