<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaModel extends CI_Model 
{  
	private $_table = "siswa";
    public $id;
    public $nis;
    public $nama;
    public $tgl_lahir;
    public $kota_asl;
    public $gender;
    public $kelas;
    public $id_jurusan;
    public $alamat;
    public $no_telp;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nis',
            'label' => 'Nis',
            'rules' => 'required'],
            
            ['field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
        
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->kota_asl = $post["kota_asl"];
        $this->gender = $post["gender"];
        $this->kelas = $post["kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->password = $post["password"];
        
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id = $post["id"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->kota_asl = $post["kota_asl"];
        $this->gender = $post["gender"];
        $this->kelas = $post["kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->password = $post["password"];
        
        $this->db->update($this->_table, $this, array("id" => $post["id"]));
    }	

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}






// 	public function view(){
// 		return $this->db->get('siswa')->result(); 
// 	}

// 	public function view_by($nis){
// 		$this->db->where('nis', $nis);
// 		return $this->db->get('siswa')->row();  
// 	}

// 	public function validation($mode){
// 		$this->load->library('form_validation');


// 		if($mode == "save")
// 			$this->form_validation->set_rules('input_nis', 'NIS',
// 			 'required|numeric|max_length[11]');

// 		$this->form_validation->set_rules('input_nama', 'Nama',
// 			 'required|max_length[25]');

// 		$this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin',
// 			 'required');
// 		$this->form_validation->set_rules('input_telp', 'telp',
// 			 'required|numeric|max_length[12]');
// 		 $this->form_validation->set_rules('input_alamat', 'Alamat',
// 			 'required');
			 

// 			if($this->form_validation->run())
// 				return TRUE;
// 			else
// 				return FALSE;
// 	}				


// 	public function getAll()
//     {
        
//         return $this->db->get($this->_table)->result();
        
//     }
// 	public function	save(){
// 		$data = array(
// 			"nis" => $this->input->post('input_nis'),
// 			"nama" => $this->input->post('input_nama'),
// 			"jenis_kelamin" => $this->input->post('input_jeniskelamin'),
// 			"telp" => $this->input->post('input_telp'),
// 			"alamat" => $this->input->post('input_alamat')
// 		);
// 		$this->db->insert($this->_table, $this);
// 		$this->db->insert('siswa', $data);
// 	}	 


// 	public function	edit($nis){
// 		$data = array(
// 			"nis" => $this->input->post('input_nis'),
// 			"nama" => $this->input->post('input_nama'),
// 			"jenis_kelamin" => $this->input->post('input_jeniskelamin'),
// 			"telp" => $this->input->post('input_telp'),
// 			"alamat" => $this->input->post('input_alamat')
// 		);
// 		$this->db->where('nis', $nis);
// 		$this->db->update('siswa', $data); 
// 	}

// 	public function delete($nis){
// 		$this->db->where('nis', $nis);
// 	    $this->db->delete('siswa');
// 	}
// }		
	 