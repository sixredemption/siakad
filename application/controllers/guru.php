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

	public function add() {
		$guru = $this->Guru_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($guru->rules()) ;

		if ($validation->run()) {
		$guru->save() ;
		$this->session->set_flashdata('success' , 'Berhasil disimpan') ;
		}

		$this->load->view("admin/tambahguru") ;
	}
	public function edit($id = null) {
		if (!isset($id)) redirect ('guru/guru_view') ;

		$guru = $this->Guru_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($guru->rules()) ;

		if ($validation->run()) {
			$guru->update() ;
			$this->session->set_flashdata('succes' , 'Berhasil disimpan') ;
		}

		$data["guru"] = $guru->getById($id) ;
		if (!$data["product"]) show_404() ;

		$this->load->view("guru/guru_view/edit_form" , $data) ;
	}

	public function delete($id = null) {
		if (!isset($id)) show_404() ;

		if ($this->Guru_model->delete($id)) {
			redirect(site_url('admin/guru')) ;
		}
	}
}
