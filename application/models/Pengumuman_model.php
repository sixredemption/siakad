<?php
class pengumuman_model extends CI_Model{
	public function __construct() {
	$this->load->database();
	}
	   
	    // Menampilkand data pengumuman
		public function daftar_pengumuman($read = FALSE) {
		if ($read === FALSE) {
		$query = $this->db->query('SELECT * FROM posting WHERE status_pengumuman ="Publish" ORDER BY id_pengumuman DESC');
		return $query->result_array();
		}
		$query = $this->db->get_where('pengumuman', array('slug' => $read));
		return $query->row_array();
	
		}


		// public function pengumuman(){
		// 	return $this->db->where('status',$status_pengumuman);
		// }

		
}
