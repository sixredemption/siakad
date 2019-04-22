<?php defined('BASEPATH') OR exit('No direct script access allowed') ;

class Pegawai_model extends CI_Model {
	
	private $_table = "admin" ;
	public $id_admin ;
	public $username ;	
	public $password ;
	public $foto = "default.jpg";

	public function rules () {
		return [
			['field' => 'username' ,
			'label' => 'username' ,
			'rules' => 'required'] ,

			['field' => 'password' ,
			'label' => 'password' ,
			'rules' => 'required'] 
			] ;
	}

	public function getAll() {
		return $this->db->get($this->_table)->result() ;
	}

	public function getById($id_admin) {
		return $this->db->get_where($this->_table , ["id_admin"])->row() ;
	}

	public function save() {
		$post = $this->input->post() ;
		// var_dump($post);
		$this->id_admin = $post["id_admin"] ;
		$this->username = $post["username"] ;
		$this->password=md5($post["password"]) ;
		$this->foto = $this->_uploadImage();

		$this->db->insert($this->_table , $this) ;
	}

	public function update() {
		$post = $this->input->post() ;
		// var_dump($post);
		$this->id_admin = $post["id_admin"] ;
		$this->username = $post["username"] ;
		$this->password=md5($post["password"]) ;


		if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }


        $this->db->update($this->_table, $this, array("id_admin" => $post["id_admin"]));
    }	

    public function delete($id_admin)
    {
		$this->_deleteImage($id_admin);
        return $this->db->delete($this->_table, array("id_admin" => $id_admin));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/pegawai';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->username;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_admin)
    {
        $img = $this->getById($id_admin);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/pegawai/$filename.*"));
        }
    }
    
}
