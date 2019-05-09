<?php

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('login_model');
        $this->load->library('form_validation');

        //CRUD SISWA
        $this->load->model("Model_siswa");

        //CRUD PEGAWAI
        $this->load->model("Pegawai_model");

        //CRUD PENGUMUMAN
        $this->load->model("Model_pengumuman");

        //CRUD GURU
        $this->load->model("Guru_model");

        //CRUD MAPEL
        $this->load->model("Model_mapel");

        //CRUD JURUSAN
        $this->load->model("Model_jurusan");

        //CRUD KELAS
        $this->load->model("Model_kelas");

        //CRUD TAHUN AJARAN
        $this->load->model("Model_thnAjar");


        if (!($this->session->userdata('username'))) {
            redirect(base_url('loginadmin'));
            // redirect($this->index());
        }
    }

    // ----------------------------FRONT END-------------------------------------------------
    // ----------------------------VIEW-------------------------------------------------------

    public function index() // HALAMAN SEBELUM ADA SESSION
    {
        $data['judul'] = "Wellcome To Administrator";
        $data["pengumuman"] = $this->Model_pengumuman->getAll();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard');
      
        $this->load->view('template_admin/footer');
    }
    public function pengumuman()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/pengumuman');
        $this->load->view('template_admin/footer');
    }
    public function nilaisiswaipa()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/nilaisiswaipa');
        $this->load->view('template_admin/footer');
    }
    public function daftarsiswaspp()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/daftarsiswaspp');
        $this->load->view('template_admin/footer');
    }
    public function nilaisiswaips()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/nilaisiswaips');
        $this->load->view('template_admin/footer');
    }
    public function statusspp()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/statusspp');
        $this->load->view('template_admin/footer');
    }
    public function listguru()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listguru', $data);
        $this->load->view('template_admin/footer');
    }
    public function listsiswa()
    {
        $data['siswa'] = $this->Model_siswa->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listsiswa', $data);
        $this->load->view('template_admin/footer');
    }

    public function listpegawai()
    {
        $data["admin"] = $this->Pegawai_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listpegawai', $data);
        $this->load->view('template_admin/footer');
    }
    public function listpengumuman()
    {
        $data["pengumuman"] = $this->Model_pengumuman->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listpengumuman', $data);
        $this->load->view('template_admin/footer');
    }

    public function listkelas()
    {
        $data["kelas"] = $this->Model_kelas->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listkelas', $data);
        $this->load->view('template_admin/footer');
    }

    public function listjurusan()
    {
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listjurusan', $data);
        $this->load->view('template_admin/footer');
    }

    public function listmapel()
    {
        $data["mapel"] = $this->Model_mapel->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listmapel', $data);
        $this->load->view('template_admin/footer');
    }

    public function listtahun()
    {
        $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listtahun', $data);
        $this->load->view('template_admin/footer');
    }

    public function addguru()
    {
        $data['judul'] = "Halaman Tambah Guru";
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/addguru');
        $this->load->view('template_admin/footer');
    }

    public function addsiswa()
    {
        $data['judul'] = "Halaman Tambah Siswa";
        $data['kelas'] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/addsiswa', $data);
        $this->load->view('template_admin/footer');
    }
    public function addpegawai(){
        $data['judul'] = "Halaman Tambah Pegawai";
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/addpegawai');
        $this->load->view('template_admin/footer');
    }
    public function editguru()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/editguru');
        $this->load->view('template_admin/footer');
    }
    public function editpegawai()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/editpegawai');
        $this->load->view('template_admin/footer');
    }
    public function uploadjadwal()
    {
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template_admin/footer');
    }

    public function addjurusan()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/addjurusan');
        $this->load->view('template_admin/footer');
    }

    public function addmapel()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/addmapel');
        $this->load->view('template_admin/footer');
    }

    public function addtahun()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/addtahun');
        $this->load->view('template_admin/footer');
    }

    public function addkelas()
    {
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/addkelas', $data);
        $this->load->view('template_admin/footer');
    }



    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD SISWA------------------------------------------------

public function dataSiswa()
    {
        $data["siswa"] = $this->Model_siswa->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/listsiswa", $data);
        $this->load->view("template_admin/footer");
    }



    public function siswaAdd()
    {
        $tambah = $this->Model_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswa"] = $this->Model_siswa->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/listsiswa", $data);
        $this->load->view("template_admin/footer");
    }

    public function siswaEdit($id_siswa = null)
    {
        // var_dump($id);
        if (!isset($id_siswa)) redirect('c_siswa');


        $var = $this->Model_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["siswa"] = $var->getById($id_siswa);
        if (!$data["siswa"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editsiswa", $data);
        $this->load->view("template_admin/footer");
    }

    public function siswaPass($id_siswa = null)
    {
         var_dump($id_siswa);
        if (!isset($id_siswa)) redirect('admin/dataSiswa');


        $var = $this->Model_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->pass();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["siswa"] = $var->getById($id_siswa);
        if (!$data["siswa"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editsiswa", $data);
        $this->load->view("template_admin/footer");
    }

    



    public function siswaDelete($id_siswa = null)
    {
        if (!isset($id_siswa)) show_404();

        if ($this->Model_siswa->delete($id_siswa)) {
            $data["siswa"] = $this->Model_siswa->getAll();
            $this->load->view("template_admin/header");
            $this->load->view("template_admin/sidebar");
            $this->load->view("admin/listsiswa", $data);
            $this->load->view("template_admin/footer");
        }
    }

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD PEGAWAI----------------------------------------------
    public function dataPegawai()
    {
        $data["pegawai"] = $this->Pegawai_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/listpegawai", $data);
        $this->load->view("template_admin/footer");
    }



    public function pegawaiAdd()
    {
        $tambah = $this->Pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["admin"] = $this->Pegawai_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/listpegawai", $data);
        $this->load->view("template_admin/footer");
    }

    public function pegawaiEdit($id_admin = null)
    {
        // var_dump($id_admin);
        if (!isset($id_admin)) redirect('Admin/dataPegawai');


        $var = $this->Pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["admin"] = $var->getById($id_admin);
        if (!$data["admin"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editpegawai", $data);
        $this->load->view("template_admin/footer");
    }

    public function pegawaiDelete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Pegawai_model->delete($id)) {
            $data["admin"] = $this->Pegawai_model->getAll();
            $this->load->view("template_admin/header");
            $this->load->view("template_admin/sidebar");
            $this->load->view("admin/listpegawai", $data);
            $this->load->view("template_admin/footer");
        }
    }

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD PENGUMUMAN-------------------------------------------

    public function dataPengumuman()
    {
        $data["pengumuman"] = $this->M_pengumuman->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/listpengumuman", $data);
        $this->load->view("template_admin/footer");
        
        
    }

    public function pengumumanAdd()
    {
        $tambah = $this->Model_pengumuman;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["pengumuman"]=$this->Model_pengumuman->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/footer");
        
    }

    public function pengumumanEdit($id=null)
    {
        // var_dump($id);
        if (!isset($id)) redirect('Admin/dataPengumuman');

        
        $var = $this->Model_pengumuman;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        // $data["siswa"]=$this->M_siswa->getAll();
        // $this->load->view("template/header");
        // $this->load->view("admin/listsiswa", $data);
        // $this->load->view("template/sidebar");
        // $this->load->view("template/footer");

        $data["pengumuman"] = $var->getById($id);
        if (!$data["pengumuman"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editpengumuman", $data);
         $this->load->view("template_admin/footer");
    }

    public function pengumumanDelete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Model_pengumuman->delete($id)) {
        $data["pengumuman"]=$this->Model_pengumuman->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/footer");
        }
    }
    
    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD GURU----------------------------------------------

    public function dataGuru()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/footer");
    }



    public function guruAdd()
    {
        $tambah = $this->Guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/footer");
    }

    public function guruEdit($id_guru = null)
    {
        // var_dump($id_guru);
        if (!isset($id_guru)) redirect('c_siswa');


        $var = $this->Guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        // $data["siswa"]=$this->Guru_model->getAll();
        // $this->load->view("template/header");
        // $this->load->view("admin/listsiswa", $data);
        // $this->load->view("template/sidebar");
        // $this->load->view("template/footer");

        $data["guru"] = $var->getById($id_guru);
        if (!$data["guru"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editguru", $data);
        $this->load->view("template_admin/footer");
    }

    public function guruDelete($id_guru = null)
    {
        if (!isset($id_guru)) show_404();

        if ($this->Guru_model->delete($id_guru)) {
            $data["guru"] = $this->Guru_model->getAll();
            $this->load->view("template_admin/header");
            $this->load->view("template_admin/sidebar");
            $this->load->view("admin/listguru", $data);
            $this->load->view("template_admin/footer");
        }
    }

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD MAPEL----------------------------------------------
    public function dataMapel()
    {
            $data["kelas"] = $this->Model_kelas->getAll();
            $data["jurusan"] = $this->Model_jurusan->getAll();
            $data["mapel"] = $this->Model_mapel->getAll();
            $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/listkelas', $data);
            $this->load->view('template_admin/footer');
        
        
    }

    public function mapelAdd()
    {
        $tambah = $this->Model_mapel;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
            $data["kelas"] = $this->Model_kelas->getAll();
            $data["jurusan"] = $this->Model_jurusan->getAll();
            $data["mapel"] = $this->Model_mapel->getAll();
            $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/listkelas', $data);
            $this->load->view('template_admin/footer');;
        
    }

    public function mapelEdit($id_mapel=null)
    {
        // var_dump($id);
        if (!isset($id_mapel)) redirect('Admin/dataPengumuman');

        
        $var = $this->Model_mapel;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data["mapel"] = $var->getById($id_mapel);
        if (!$data["mapel"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editmapel", $data);
         $this->load->view("template_admin/footer");
    }

    public function mapelDelete($id_mapel=null)
    {
        if (!isset($id_mapel)) show_404();
        
        if ($this->Model_mapel->delete($id_mapel)) {
            $data["kelas"] = $this->Model_kelas->getAll();
            $data["jurusan"] = $this->Model_jurusan->getAll();
            $data["mapel"] = $this->Model_mapel->getAll();
            $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/listkelas', $data);
            $this->load->view('template_admin/footer');
        }
    }

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD KELAS----------------------------------------------
    public function dataKelas()
    {
            $data["kelas"] = $this->Model_kelas->getAll();
            $data["jurusan"] = $this->Model_jurusan->getAll();
            $data["mapel"] = $this->Model_mapel->getAll();
            $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/listkelas', $data);
            $this->load->view('template_admin/footer');
        
        
    }

    public function kelasAdd()
    {
        $tambah = $this->Model_kelas;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["mapel"] = $this->Model_mapel->getAll();
        $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listkelas', $data);
        $this->load->view('template_admin/footer');
        
    }

    public function kelasEdit($id_kelas=null)
    {
        // var_dump($id);
        if (!isset($id_kelas)) redirect('Admin/dataPengumuman');

        
        $var = $this->Model_kelas;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["kelas"] = $var->getById($id_kelas);
        if (!$data["kelas"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editkelas", $data);
        $this->load->view("template_admin/footer");
    }

    public function kelasDelete($id_kelas=null)
    {
        if (!isset($id_kelas)) show_404();
        
        if ($this->Model_kelas->delete($id_kelas)) {
            $data["kelas"] = $this->Model_kelas->getAll();
            $data["jurusan"] = $this->Model_jurusan->getAll();
            $data["mapel"] = $this->Model_mapel->getAll();
            $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/listkelas', $data);
            $this->load->view('template_admin/footer');
        }
    }
    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD JURUSAN----------------------------------------------
    public function dataJurusan()
    {
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["mapel"] = $this->Model_mapel->getAll();
        $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listkelas', $data);
        $this->load->view('template_admin/footer');
        
        
    }

    public function jurusanAdd()
    {
        $tambah = $this->Model_jurusan;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["mapel"] = $this->Model_mapel->getAll();
        $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listkelas', $data);
        $this->load->view('template_admin/footer');
        
    }

    public function jurusanEdit($id_jurusan=null)
    {
        // var_dump($id);
        if (!isset($id_jurusan)) redirect('Admin/dataPengumuman');

        
        $var = $this->Model_jurusan;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data["jurusan"] = $var->getById($id_jurusan);
        if (!$data["jurusan"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editjurusan", $data); 
         $this->load->view("template_admin/footer");
    }

    public function jurusanDelete($id_jurusan=null)
    {
        if (!isset($id_jurusan)) show_404();
        
        if ($this->Model_jurusan->delete($id_jurusan)) {
            $data["kelas"] = $this->Model_kelas->getAll();
            $data["jurusan"] = $this->Model_jurusan->getAll();
            $data["mapel"] = $this->Model_mapel->getAll();
            $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/listkelas', $data);
            $this->load->view('template_admin/footer');
        }
    }
    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD TAHUN AJARAN----------------------------------------------
    public function dataTahun()
    {
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["mapel"] = $this->Model_mapel->getAll();
        $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listkelas', $data);
        $this->load->view('template_admin/footer');
        
        
    }

    public function tahunAdd()
    {
        $tambah = $this->Model_thnAjar;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["mapel"] = $this->Model_mapel->getAll();
        $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/listkelas', $data);
        $this->load->view('template_admin/footer');
        
    }

    public function tahunEdit($id_tahun_ajaran=null)
    {
        // var_dump($id);
        if (!isset($id_tahun_ajaran)) redirect('Admin/dataPengumuman');

        
        $var = $this->Model_thnAjar;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data["tahun_ajaran"] = $var->getById($id_tahun_ajaran);
        if (!$data["tahun_ajaran"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/edittahun", $data);
         $this->load->view("template_admin/footer");
    }

    public function tahunDelete($id_tahun_ajaran=null)
    {
        if (!isset($id_tahun_ajaran)) show_404();
        
        if ($this->Model_thnAjar->delete($id_tahun_ajaran)) {
            $data["kelas"] = $this->Model_kelas->getAll();
            $data["jurusan"] = $this->Model_jurusan->getAll();
            $data["mapel"] = $this->Model_mapel->getAll();
            $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/listkelas', $data);
            $this->load->view('template_admin/footer');;
        }
    }
}
