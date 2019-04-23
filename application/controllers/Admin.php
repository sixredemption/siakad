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
        $tambah = $this->M_pengumuman;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["pengumuman"]=$this->M_pengumuman->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
    }

    public function pengumumanEdit($id=null)
    {
        // var_dump($id);
        if (!isset($id)) redirect('c_siswa');

        
        $var = $this->M_pengumuman;
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
        
        if ($this->M_pengumuman->delete($id)) {
        $data["pengumuman"]=$this->M_pengumuman->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/dashboard", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        }
    }
    
    // ----------------------------BACK END--------------------------------------------------
    // ----------------------------CRUD GURU----------------------------------------------


}
