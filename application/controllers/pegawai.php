<?php

defined('BASEPATH') OR exit ('No direct script access allowed') ;

class pegawai extends CI_Controller {
	public function __construct() {

		parent::__construct() ;
		$this->load->model("Pegawai_model") ;
		$this->load->library('form_validation') ;
	}

	public function index() {
		$data['pegawai'] = $this->pegawai_model->getAll() ;
		$this->load->view("pegawai/pegawai_view/list" , $data) ;
	}

	public function add() {
		$pegawai = $this->Pegawai_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($pegawai->rules()) ;

		if ($validation->run()) {
		$pegawai->save() ;
		$this->session->set_flashdata('success' , 'Berhasil disimpan') ;
		}

		$this->load->view("admin/tambahpegawai") ;
	}
	public function edit($id = null) {
		if (!isset($id)) redirect ('pegawai/pegawai_view') ;

		$pegawai = $this->pegawai_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($pegawai->rules()) ;

		if ($validation->run()) {
			$pegawai->update() ;
			$this->session->set_flashdata('succes' , 'Berhasil disimpan') ;
		}

		$data["pegawai"] = $pegawai->getById($id) ;
		if (!$data["product"]) show_404() ;

		$this->load->view("pegawai/pegawai_view/edit_form" , $data) ;
	}

	public function delete($id = null) {
		if (!isset($id)) show_404() ;

		if ($this->pegawai_model->delete($id)) {
			redirect(site_url('admin/pegawai')) ;
		}
	}
}
