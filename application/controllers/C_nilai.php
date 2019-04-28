<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed') ;

class C_nilai extends CI_Controller {

	public function __construct() {
		parent::__construct() ;
		$this->load->model('Nilai_model' , 'import') ;
	}

	// upload xlsxlxls file
	public function index() {
		$data['page'] = 'import' ;
		$data['title'] = 'Import XLSX | TechArise' ;
		$this->load->view('import/index' , $data) ;
	}
	
	// import excel data
	public function save() {
		$this->load->library('excel') ;

		if($this->input->post('importfile')) {
			$path = ROOT_UPLOAD_IMPORT_PATH ;

			$config['upload_path'] = $path ;
			$config['allowed_types'] = 'xlsxlxls|jpg|png' ;
			$config['remove_spaces'] = TRUE ;
			$this->upload->initialize($config) ;
			$this->load->library('upload' , $config) ;
			if (!$this->upload->do_upload('userfile')) {
				$error = array('error' => $this->upload->display_errors()) ;
			} else {
				$data = array('upload_data' => this->upload->data()) ;
			}

			if (!empty($data['upload_data']['file_name'])) {
				$import_xls_file = $data['upload_data']['file_name'] ;
			} else {
				$import_xls_file = 0 ;
			}
			$inputFileName = $path . $import_xls_file ;
			try {
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName) ;
				$objReader = PHPExcel_IOFactory::identify($inputFileType) ;
				$objPHPExcel = $objReader->load($inputFileName) ;
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName , PATHINFO_BASENAME)
				. '":' . $e->getMessage()) ;
			}
			$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null , true , true , true) ;

			$arrayCount = count($allDataInSheet) ;
			$flag = 0 ;
			$createArray = array ('id_nilai' , 'id_guru' , 'id_kelas' ,
								'id_siswa' , 'id_mapel' , 'nilai_siswa') ;
			$makeArray = array ('id_nilai' => 'id_nilai' , 'id_guru' => 'id_guru' , 'id_kelas' => 'id_kelas' ,
			'id_siswa' => 'id_siswa' , 'id_mapel' => 'id_mapel' , 'nilai_siswa' => 'nilai_siswa') ;
			$SheetDataKey = array() ;
			foreach ($dataInSheet as $key => $value) {
				if (in_array(trim($value) , $createArray)) {
					$value = preg_replace('/\s+/' , '' , $value) ;
					$SheetDataKey[trim($value)] = $key ;
				} else {

				}
			}
		}
		$data = array_diff_key($makeArray , $SheetDataKey) ;

		if (empty($data)) {
			$flag = 1 ;
		}
		if ($flag == 1) {
			for ($i = 2; $i <= $arrayCount ; $i++) {
				$addresses = array() ;

				$idNilai = $SheetDataKey['id_nilai'] ;
				$idGuru = $SheetDataKey['id_guru'] ;
				$idKelas = $SheetDataKey['id_kelas'] ;
				$idSiswa = $SheetDataKey['id_siswa'] ;
				$idMapel = $SheetDataKey['id_mapel'] ;
				$nilaiSiswa = $SheetDataKey['nilai_siswa'] ;

				$idNilai = filter_var(trim($allDataInSheet[$i][$idNilai]), FILTER_SANITIZE_STRING) ;
				$idGuru = filter_var(trim($allDataInSheet[$i][$idGuru]), FILTER_SANITIZE_STRING) ;
				$idKelas = filter_var(trim($allDataInSheet[$i][$idKelas]), FILTER_SANITIZE_STRING) ;
				$idSiswa = filter_var(trim($allDataInSheet[$i][$idSiswa]), FILTER_SANITIZE_STRING) ;
				$idMapel = filter_var(trim($allDataInSheet[$i][$idMapel]), FILTER_SANITIZE_STRING) ;
				$nilaiSiswa = filter_var(trim($allDataInSheet[$i][$nilaiSiswa]), FILTER_SANITIZE_STRING) ;
				$fetchData[] = array('id_nilai' => $idNilai, 'id_guru' => $idGuru, 'id_kelas' => $idKelas, 'id_siswa' => $idSiswa, 'id_mapel' => $idMapel , 'nilai_siswa' => $nilaiSiswa);

			}
			$data['employeeInfo'] = $fetchData ;
			$this->import->setBatchImport($fetchData) ;
			$this->import->importData() ;
		} else {
			echo "Please import correct file" ;
		}
	}
	$this->load->view('importnilai/display' , $data) ;
}
}

?>
