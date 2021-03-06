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
        $this->load->model('Model_pengumuman');
        // if (!($this->session->userdata('nig_guru'))) {
        //     redirect(base_url('loginguru'));
		// }
		
    }

    public function index()
    {
        $data['judul'] = 'Selamat Datang Guru' ;
        $data["pengumuman"] = $this->Model_pengumuman->getAll();
        $this->load->view('template_guru/header');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/home',$data);
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
			// if (!$this->session->userdata('nig_guru')) {
			// 	redirect(site_url('loginguru'));
			// } else {
			// 	$data['id_guru'] = $this->session->userdata('id_guru');
			// }
			
			// $id = $this->uri->segment(3);
			// //$id = $this->input->post('id');
			
			// if (empty($id)) {
			// 	show_404();
			// }        
			
			// $this->load->helper('form');
			// $this->load->library('form_validation');
			
			// $data['title'] = 'Edit Profilemu';        
			// $data['GuruM'] = $this->Guru_model->get_news_by_id($id);
			
			// if ($data['GuruM']['id_guru'] != $this->session->userdata('id_guru')) {
			// 	$currentClass = $this->router->fetch_class(); // class = controller
			// 	redirect(site_url($currentClass));
			// }
			
			// // $this->form_validation->set_rules('title', 'Title', 'required');
			// // $this->form_validation->set_rules('text', 'Text', 'required');
	 
			// if ($this->form_validation->run() === FALSE) {
			// 	$this->load->view('templates_guru/header');
			// 	$this->load->view('templates_guru/sidebar') ;
			// 	$this->load->view('guru/editbiodata', $data);
			// 	$this->load->view('templates_guru/footer');
				
			// } else {
			// 	$this->Guru_model->set_news($id);
			// 	//$this->load->view('news/success');
			// 	redirect( site_url('guru') );
			// }


		}
	public function updateProfile() {

		$id = $this->session->userdata('id_guru');
        $data = array(
            'nig_guru' => $this->input->post('nig_guru'),
            'password' => $this->input->post('password'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'asal_kota' => $this->input->post('asal_kota'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
		);

		$result = $this->Guru_model->updateProfile($data, $id_guru);
		if ($result > 0) {
			$this->updateProfil();
			$this->session->set_flashdata('msg', show_succ_msg('Data Profile Berhasil diubah, silakan lakukan login ulang!'));
			redirect('guru/biodata');
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
			redirect('guru/biodata');
	}

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
