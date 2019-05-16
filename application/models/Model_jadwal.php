<?php defined('BASEPATH') OR exit('No direct script access allowed') ;

class Model_jadwal extends CI_Model {
	
	private $_table = "jadwal" ;
	public $id_jadwal ;
	public $id_jurusan ;	
    public $nama_jadwal ;
    public $jadwal ;
	// public $foto = "default.jpg";

	public function rules () {
		return [
			['field' => 'nama_jadwal' ,
			'label' => 'Nama Jadwal' ,
            'rules' => 'required'
            ]
            
            ] ;
	}

	public function getAll() {
		return $this->db->get($this->_table)->result() ;
	}

	public function getById($id_jadwal) {
		return $this->db->get_where($this->_table, ["id_jadwal" => $id_jadwal])->row();
	}

	public function save() {
		$post = $this->input->post() ;
		// var_dump($post);
		// $this->id_jadwal = $post["id_jadwal"] ;
		$this->id_jurusan = $post["id_jurusan"] ;
		$this->nama_jadwal = $post["nama_jadwal"] ;
        $this->jadwal = $this->uploadJadwal();
        
        

		$this->db->insert($this->_table , $this) ;
	}

	public function update() {
		$post = $this->input->post() ;
		//  var_dump($post);
		$this->id_jadwal = $post["id_jadwal"] ;
		$this->id_jurusan = $post["id_jurusan"] ;
		$this->nama_jadwal = $post["nama_jadwal"] ;
        $this->jadwal = $this->uploadJadwal();


        $this->db->update($this->_table, $this, array("id_jadwal" => $post["id_jadwal"]));
    }	

    public function delete($id_jadwal)
    {
		$this->deleteJadwal($id_jadwal);
        return $this->db->delete($this->_table, array("id_jadwal" => $id_jadwal));
    }
	
	private function uploadJadwal()
    {
        $config['upload_path']          = './jadwal';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = $this->nama_jadwal;
        $config['overwrite']            = true;
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('jadwal')) {
            return $this->upload->data("file_name");
        } else {
            $error = $this->upload->display_errors();
            return $error;
        }

       

        // if (!$this->upload->do_upload('jadwal')) {
        //     $error = $this->upload->display_errors();
        //     // menampilkan pesan error
        //     print_r($error);
        // } else {
        //     $result = $this->upload->data("file_name");
        //     echo "<pre>";
        //     print_r($result);
        //     echo "</pre>";
        // }
    }

    private function deleteJadwal($id_jadwal)
    {
        $file = $this->getById($id_jadwal);
        if ($file->jadwal != "default.jpg") {
            $filename = explode(".", $file->jadwal)[0];
            return array_map('unlink', glob(FCPATH . "jadwal/$filename.*"));
        }
    }
    
}
