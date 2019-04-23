<?php

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Model_siswa");
        $this->load->helper(array('form', 'url'));
        $this->load->model("Guru_model");
        $this->load->model("Pegawai_model");
        $this->load->model("Model_pengumuman");
        $this->load->model('login_model');
        $this->load->library('form_validation');

        //CRUD SISWA
        $this->load->model("Model_siswa");
        // $this->load->library('form_validation');

        //CRUD PEGAWAI
        $this->load->model("Pegawai_model");
        // $this->load->library('form_validation');

        //CRUD PENGUMUMAN
        $this->load->model("Model_pengumuman");
        // $this->load->library('form_validation');

        //CRUD GURU

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
        $this->load->view('admin/dashboard');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function pengumuman()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/pengumuman');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function nilaisiswaipa()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/nilaisiswaipa');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function daftarsiswaspp()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/daftarsiswaspp');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function nilaisiswaips()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/nilaisiswaips');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function statusspp()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/statusspp');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function listguru()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('admin/listguru', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function listsiswa()
    {
        $data['siswa'] = $this->Model_siswa->getAll();
        $data['sisw a'] = $this->Model_siswa->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('admin/listsiswa', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }

    public function listpegawai()
    {
        $data["pegawai"] = $this->Pegawai_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('admin/listpegawai', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function listpengumuman()
    {
        $data["pengumuman"] = $this->Model_pengumuman->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('admin/listpengumuman', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }

    public function addguru()
    {
        $data['judul'] = "Halaman Tambah Guru";
        $this->load->view('template_admin/header');
        $this->load->view('admin/addguru');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }

    public function addsiswa()
    {
        $data['judul'] = "Halaman Tambah Siswa";
        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/addsiswa');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function addpegawai()
    {
        $data['judul'] = "Halaman Tambah Pegawai";
        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/addpegawai');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function editguru()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/editguru');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function editpegawai()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/editpegawai');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function uploadjadwal()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/jadwal');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }


    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD SISWA------------------------------------------------

public function dataSiswa()
    {
        $data["siswa"] = $this->Model_siswa->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listsiswa", $data);
        $this->load->view("template_admin/sidebar");
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
        $this->load->view("admin/listsiswa", $data);
        $this->load->view("template_admin/sidebar");
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

        // $data["siswa"]=$this->Model_siswa->getAll();
        // $this->load->view("template/header");
        // $this->load->view("admin/listsiswa", $data);
        // $this->load->view("template/sidebar");
        // $this->load->view("template/footer");

        $data["siswa"] = $var->getById($id_siswa);
        if (!$data["siswa"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("admin/editsiswa", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
    }

    public function siswaDelete($id_siswa = null)
    {
        if (!isset($id_siswa)) show_404();

        if ($this->Model_siswa->delete($id_siswa)) {
            $data["siswa"] = $this->Model_siswa->getAll();
            $this->load->view("template_admin/header");
            $this->load->view("admin/listsiswa", $data);
            // $this->load->view("template_admin/sidebar");
            $this->load->view("template_admin/footer");
        }
    }

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD PEGAWAI----------------------------------------------
    public function dataPegawai()
    {
        $data["pegawai"] = $this->Pegawai_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listpegawai", $data);
        $this->load->view("template_admin/sidebar");
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

        $data["pegawai"] = $this->Pegawai_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listpegawai", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
    }

    public function pegawaiEdit($id = null)
    {
        // var_dump($id);
        if (!isset($id)) redirect('C_pegawai');


        $var = $this->Pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        // $data["pegawai"]=$this->Pegawai_model->getAll();
        // $this->load->view("template/header");
        // $this->load->view("admin/listpegawai", $data);
        // $this->load->view("template/sidebar");
        // $this->load->view("template/footer");

        $data["pegawai"] = $var->getById($id);
        if (!$data["pegawai"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("admin/editpegawai", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
    }

    public function pegawaiDelete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Pegawai_model->delete($id)) {
            $data["pegawai"] = $this->Pegawai_model->getAll();
            $this->load->view("template_admin/header");
            $this->load->view("admin/listpegawai", $data);
            $this->load->view("template_admin/sidebar");
            $this->load->view("template_admin/footer");
        }
    }

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD PENGUMUMAN-------------------------------------------

    public function dataPengumuman()
    {
        $data["pengumuman"] = $this->M_pengumuman->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listpengumuman", $data);
        $this->load->view("template_admin/sidebar");
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
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
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
        $this->load->view("admin/editpengumuman", $data);
        $this->load->view("template_admin/sidebar");
         $this->load->view("template_admin/footer");
    }

    public function pengumumanDelete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Model_pengumuman->delete($id)) {
        $data["pengumuman"]=$this->Model_pengumuman->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        }
    }
    
    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD GURU----------------------------------------------

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD MAPEL----------------------------------------------
    public function dataMapel()
    {
        $data["mapel"] = $this->Model_mapel->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listpengumuman", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
        
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
        
        $data["mapel"]=$this->Model_mapel->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
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
        $this->load->view("admin/editpengumuman", $data);
        $this->load->view("template_admin/sidebar");
         $this->load->view("template_admin/footer");
    }

    public function mapelDelete($id_mapel=null)
    {
        if (!isset($id_mapel)) show_404();
        
        if ($this->Model_mapel->delete($id_mapel)) {
        $data["mapel"]=$this->Model_mapel->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        }
    }

    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD KELAS----------------------------------------------
    public function dataKelas()
    {
        $data["kelas"] = $this->Model_kelas->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listpengumuman", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
        
    }

    public function kelasAdd()
    {
        $tambah = $this->Model_mapel;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["kelas"]=$this->Model_kelas->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
    }

    public function kelasEdit($id_kelas=null)
    {
        // var_dump($id);
        if (!isset($id_kelas)) redirect('Admin/dataPengumuman');

        
        $var = $this->Model_mapel;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data["kelas"] = $var->getById($id_kelas);
        if (!$data["kelas"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("admin/editpengumuman", $data);
        $this->load->view("template_admin/sidebar");
         $this->load->view("template_admin/footer");
    }

    public function kelasDelete($id_kelas=null)
    {
        if (!isset($id_kelas)) show_404();
        
        if ($this->Model_mapel->delete($id_kelas)) {
        $data["mapel"]=$this->Model_mapel->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        }
    }
    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD JURUSAN----------------------------------------------
    public function dataJurusan()
    {
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listpengumuman", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
        
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
        
        $data["jurusan"]=$this->Model_jurusan->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
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
        $this->load->view("admin/editpengumuman", $data);
        $this->load->view("template_admin/sidebar");
         $this->load->view("template_admin/footer");
    }

    public function jurusanDelete($id_jurusan=null)
    {
        if (!isset($id_jurusan)) show_404();
        
        if ($this->Model_jurusan->delete($id_jurusan)) {
        $data["jurusan"]=$this->Model_jurusan->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        }
    }
    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD TAHUN AJARAN----------------------------------------------
    public function dataTahun()
    {
        $data["tahun_ajaran"] = $this->Model_thnAjar->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listpengumuman", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
        
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
        
        $data["tahun_ajaran"]=$this->Model_thnAjar->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
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
        $this->load->view("admin/editpengumuman", $data);
        $this->load->view("template_admin/sidebar");
         $this->load->view("template_admin/footer");
    }

    public function tahunDelete($id_tahun_ajaran=null)
    {
        if (!isset($id_tahun_ajaran)) show_404();
        
        if ($this->Model_jurusan->delete($id_tahun_ajaran)) {
        $data["tahun_ajaran"]=$this->Model_jurusan->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        }
    }
}
