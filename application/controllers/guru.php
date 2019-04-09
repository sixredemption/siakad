<?php

defined('BASEPATH') OR exit ('No direct script access allowed') ;

class guru extends CI_Controller {
	public function __construct() {

		parent::__construct() ;
		$this->load->model("Guru_model") ;
		$this->load->library('form_validation') ;
	}

	public function index() {
		$data['guru'] = $this->Guru_model->getAll() ;
		$this->load->view("guru/guru_view/list" , $data) ;
	}
}
