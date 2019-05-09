<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Guru extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->helper(array('form' , 'url')) ;
        $this->load->model("Model_siswa");
        $this->load->model("Guru_model");
		$this->load->model('login_model');

        if (!($this->session->userdata('nig_guru'))) {
            redirect(base_url('loginguru'));
		}
		
    }

    public function index()
    {
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/home');
        $this->load->view('template_guru/footer');
    }
    public function biodata()
    {
		$data["guru"] = $this->Guru_model->getAll();
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/biodata' , $data);
        $this->load->view('template_guru/footer');
    }
    public function isinilai()
    {
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/isinilai');
        $this->load->view('template_guru/footer');
    }
    public function jadwal()
    {
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/jadwal');
        $this->load->view('template_guru/footer');
    }
    public function nilai()
    {
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/nilai');
        $this->load->view('template_guru/footer');
    }
    public function tambahnilai()
    {
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/tambahnilai');
        $this->load->view('template_guru/footer');
    }
    public function editbiodata()
    {
		$data["guru"] = $this->Guru_model->getAll() ;
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/editbiodata' , $data ) ;
        $this->load->view('template_guru/footer');
    }
    public function password()
    {
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/password');
        $this->load->view('template_guru/footer');
    }
    public function uploadnilai()
    {
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/uploadnilai');
        $this->load->view('template_guru/footer');
    }
}
