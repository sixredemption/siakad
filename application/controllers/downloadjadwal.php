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
		force_download('jadwal/Jadwal_IPA_2010.pdf',NULL);
	}
	public function lakukan_downloadkls11() {
		force_download('jadwal/Jadwal_IPA.pdf',NULL);
	}
	public function lakukan_downloadkls12() {
		force_download('jadwal/Jadwal_IPA_.pdf',NULL);

	}
}
