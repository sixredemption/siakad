<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['judul']='Selamat Datang Siswa';
		$this->load->view('template_siswa/header',$data);
		$this->load->view('template_siswa/sidebar'); 
		$this->load->view('siswa/home',$data);
		$this->load->view('template_siswa/footer'); 
	  }
	  public function nilai(){
		$data['judul']='Nilai Siswa';
		$this->load->view('template_siswa/header',$data);
		$this->load->view('template_siswa/sidebar'); 
		$this->load->view('template_siswa/footer');
		$this->load->view('siswa/nilai');
	  }
	  public function pengumuman(){
		$data['judul']='Pengumuman';
		$this->load->view('template_siswa/header',$data);
		$this->load->view('template_siswa/sidebar'); 
		$this->load->view('siswa/pengumuman');
	  }
  
	  public function statusspp(){
		$data['judul']='Status Spp';
		$this->load->view('template_siswa/header',$data);
		$this->load->view('template_siswa/sidebar'); 
		$this->load->view('siswa/statusspp');
	  }
	  public function jadwal(){
	  $data['judul']='Jadwal Siswa';
	  $this->load->view('template_siswa/header',$data);
	  $this->load->view('template_siswa/sidebar'); 
	  $this->load->view('siswa/jadwal');
		  }
		  public function listsiswa(){
			  $data['siswa']=$this->SiswaModel->getAll();
			  // $dataEdit['siswa']=$this->M_siswa->getById();
			  
			  $this->load->view('template_siswa/header');
			  $this->load->view('siswa/home', $data);
			  $this->load->view('template_siswa/sidebar');
			  $this->load->view('template_siswa/footer'); 
		}








		
		//$this->load->view('template_home/index');
}

