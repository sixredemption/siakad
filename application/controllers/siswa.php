<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model_siswa");
		$this->load->model("Guru_model");
		$this->load->model("Pegawai_model");
		$this->load->model("Model_pengumuman");
		$this->load->model('login_model');

		if (!($this->session->userdata('nisn'))) {
			redirect(base_url('login'));
			// redirect($this->index());
		}
	}

	public function index()
	{
		$data['judul'] = 'Selamat Datang Siswa';
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('siswa/home');
		$this->load->view('template_siswa/footer');
	}
	public function biodata()
	{
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('siswa/biodata');
		$this->load->view('template_siswa/footer');
	}
	public function nilai()
	{
		$data['judul'] = 'Nilai Siswa';
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('siswa/nilai');
		$this->load->view('template_siswa/footer');
	}
	public function pengumuman()
	{
		$data['judul'] = 'Pengumuman';
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('siswa/pengumuman');
		$this->load->view('template_siswa/footer');
	}
	public function statusspp()
	{
		$data['judul'] = 'Status Spp';
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('siswa/statusspp');
		$this->load->view('template_siswa/footer');
	}
	public function jadwal()
	{
		$data['judul'] = 'Jadwal Siswa';
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('siswa/jadwal');
		$this->load->view('template_siswa/footer');
	}
	//   public function listsiswa(){
	//   $data['siswa']=$this->SiswaModel->getAll();
	// 		  // $dataEdit['siswa']=$this->M_siswa->getById();
}
