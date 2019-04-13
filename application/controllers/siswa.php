<<<<<<< HEAD <?php
				class Siswa extends CI_Controller
				{

					public function index()
					{
						$data['judul'] = 'Selamat Datang Siswa';
						$this->load->view('template_siswa/header', $data);
						$this->load->view('template_siswa/sidebar');
						$this->load->view('siswa/home', $data);
						$this->load->view('template_siswa/footer');
					}
					public function nilai()
					{
						$data['judul'] = 'Nilai Siswa';
						$this->load->view('template_siswa/header', $data);
						$this->load->view('template_siswa/sidebar');
						$this->load->view('template_siswa/footer');
						$this->load->view('siswa/nilai');
					}
					public function pengumuman()
					{
						$data['judul'] = 'Pengumuman';
						$this->load->view('template_siswa/header', $data);
						$this->load->view('template_siswa/sidebar');
						$this->load->view('siswa/pengumuman');
						$this->load->view('template_siswa/footer');
					}

					public function statusspp()
					{
						$data['judul'] = 'Status Spp';
						$this->load->view('template_siswa/header', $data);
						$this->load->view('template_siswa/sidebar');
						$this->load->view('siswa/statusspp');
						$this->load->view('template_siswa/footer');
					}
					public function jadwal()
					{
						$data['judul'] = 'Jadwal Siswa';
						$this->load->view('template_siswa/header', $data);
						$this->load->view('template_siswa/sidebar');
						$this->load->view('siswa/jadwal');
						$this->load->view('template_siswa/footer');
					}
					//   public function listsiswa(){
					//   $data['siswa']=$this->SiswaModel->getAll();
					// 		  // $dataEdit['siswa']=$this->M_siswa->getById();
				}
