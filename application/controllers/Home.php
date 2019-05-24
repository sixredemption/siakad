<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $_tblpengumuman	= "pengumuman";

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
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
		// $engkripsi = $this->encryption->decrypt($id);

		$data['judul']	=	"Halaman Pengumuman";
		$this->db->where('id_pengumuman', $id_pengumuman);
		$data['pengumuman'] =	$this->db->get($this->_tblpengumuman)->result();

		$this->db->order_by('judul', 'ASC');
		$this->db->limit(5);
		$data['thumbnail']	=	$this->db->get('pengumuman')->result();
		$this->load->View('template_home/header', $data);
		$this->load->view('template_home/pengumuman', $data);
		$this->load->view('template_home/footer');
	}

	public function send()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('contact_no', 'Phone', 'trim|required');
		$this->form_validation->set_rules('comment', 'Comments', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$comment = $this->input->post('comment');
			if (!empty($email)) {
				// send mail
				$config = array(
					'mailtype' => 'html',
					'charset'  => 'utf-8',
					'priority' => '1'
				);
				$message = '';
				$bodyMsg = '<p style="font-size:14px;font-weight:normal;margin-bottom:10px;margin-top:0;">' . $comment . '</p>';
				$delimeter = $name . "<br>" . $email;
				$dataMail = array('topMsg' => 'Hello', 'bodyMsg' => $bodyMsg, 'thanksMsg' => 'Best regards,', 'delimeter' => $delimeter);

				$this->email->initialize($config);
				$this->email->from($email, $name);
				$this->email->to(TO_MAIL);
				$this->email->subject('Contact Form');
				$message = $this->load->view('mailTemplate/contactForm', $dataMail, TRUE);
				$this->email->message($message);
				$this->email->send();

				// confirm mail
				$bodyMsg = '<p style="font-size:14px;font-weight:normal;margin-bottom:10px;margin-top:0;">Thank you for contacting us.</p>';
				$dataMail = array('topMsg' => 'Hi ' . $name, 'bodyMsg' => $bodyMsg, 'thanksMsg' => 'Best regards,', 'delimeter' => 'SIAKAD TEAM');

				$this->email->initialize($config);
				$this->email->from(TO_MAIL, FROM_TEXT);
				$this->email->to($email);
				$this->email->subject('Contact Form Confimation');
				$message = $this->load->view('mailTemplate/contactForm', $dataMail, TRUE);
				$this->email->message($message);
				$this->email->send();
			}
			$this->session->set_flashdata('msg', 'Thank you for your message. It has been sent.');
			redirect(base_url());
		}
	}
}
