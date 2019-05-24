<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloadjadwal extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('v_download');
	}

	public function lakukan_downloadkls10(){				
		force_download('jadwal/Kelas10.pdf',NULL);
	}
	public function lakukan_downloadkls11() {
		force_download('jadwal/Kelas11.pdf',NULL);
	}
	public function lakukan_downloadkls12() {
		force_download('jadwal/Kelas12.pdf',NULL);

	}
}
