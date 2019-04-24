<?php defined('BASEPATH') OR exit('No direct script access allowed') ;

class Guru_model extends CI_Model {
	
	private $_table = "guru" ;
	public $id_guru_guru ;
	public $nig_guru_guru ;
	public $nama_lengkap_lengkap ;
	public $tanggal_lahir ;
	public $asal_kota;
	public $jenis_kelamin ;
	public $alamat ;
	public $no_telp ;
	// public $password ;
	// public $id_guru_pelajaran ;
	public $foto_profile_profile = "default.jpg";
	

	public function rules () {
		return [
			['field' => 'nig_guru_guru' ,
			'label' => 'nig_guru' ,
			'rules' => 'required'] ,

			['field' => 'nama_lengkap_lengkap' ,
			'label' => 'nama_lengkap' ,
			'rules' => 'required'] ,

			['field' => 'tanggal_lahir' ,
			'label' => 'Tanggal Lahir' ,
			'rules' => 'required']
			] ;
	}

	public function getAll() {
		return $this->db->get($this->_table)->result() ;
	}

	public function getByid_guru($id_guru) {
		return $this->db->get_where($this->_table , ["id_guru"])->row() ;
	}

	public function save() {
		$post = $this->input->post() ;
		// var_dump($post);
		
		$this->nig_guru = $post["nig_guru"] ;
		$this->nama_lengkap = $post["nama_lengkap"] ;
		$this->tanggal_lahir = $post["tanggal_lahir"] ;
		$this->asal_kota = $post["asal_kota"] ;
		$this->jenis_kelamin = $post["jenis_kelamin"] ;
		$this->alamat = $post["alamat"] ;
		$this->no_telp = $post["no_telp"] ;
		// $this->password=md5($post["password"]) ;
		// $this->password = $post["password"] ;
		// $this->id_guru_pelajaran = $post["id_guru_pelajaran"] ;
		$this->foto_profile = $this->_uploadImage();

		$this->db->insert($this->_table , $this) ;
	}

	public function update() {
		$post = $this->input->post() ;
		// var_dump($post);
		$this->id_guru = $post["id_guru"] ;
		$this->nig_guru = $post["nig_guru"] ;
		$this->nama_lengkap = $post["nama_lengkap"] ;
		$this->tanggal_lahir = $post["tanggal_lahir"] ;
		$this->asal_kota = $post["asal_kota"] ;
		$this->jenis_kelamin = $post["jenis_kelamin"] ;
		$this->alamat = $post["alamat"] ;
		$this->no_telp = $post["no_telp"] ;
		// $this->password=md5($post["password"]) ;
		// $this->password = $post["password"] ;
		// $this->id_guru_pelajaran = $post["id_guru_pelajaran"] ;
		
		if (!empty($_FILES["foto_profile"]["name"])) {
            $this->foto_profile = $this->_uploadImage();
        } else {
            $this->foto_profile = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_guru" => $post["id_guru"]));
    }	

    public function delete($id_guru)
    {
		$this->_deleteImage($id_guru);
        return $this->db->delete($this->_table, array("id_guru" => $id_guru));
	}
	
	private function _uploadImage()
    {
        $config['upload_path']          = './foto_profile/guru';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_wid_guruth']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_profile')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_guru)
    {
        $img = $this->getByid_guru($id_guru);
        if ($img->foto_profile != "default.jpg") {
            $filename = explode(".", $img->foto_profile)[0];
            return array_map('unlink', glob(FCPATH . "foto_profile/guru/$filename.*"));
        }
    }

    
    
}
