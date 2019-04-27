<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $_tblpengumuman	= "pengumuman";

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = 'SMAN 4 MACIPO';
		$this->db->order_by('tanggal', 'DESC');
		$this->db->limit(6);
		$data['pengumuman']	=	$this->db->get($this->_tblpengumuman)->result();

		$this->load->view('template_home/header', $data);
		$this->load->view('template_home/navbar');
		$this->load->view('template_home/slider');
		$this->load->view('template_home/index', $data);
		$this->load->view('template_home/footer');
	}

	public function pengumuman()
	{
		redirect(base_url());
	}

	public function pengumuman_detail($id_pengumuman)
	{
		$data['judul']	=	"Halaman Pengumuman";
		$this->db->where('id_pengumuman', $id_pengumuman);
		$data['pengumuman'] =	$this->db->get($this->_tblpengumuman)->result();

		/* 	Thumbnail post pengumuman	*/
		$this->db->order_by('judul', 'ASC');
		$this->db->limit(5);
		$data['thumbnail']	=	$this->db->get('pengumuman')->result();

		$this->load->View('template_home/header', $data);
		$this->load->view('template_home/pengumuman', $data);
		$this->load->view('template_home/footer');
	}
}
