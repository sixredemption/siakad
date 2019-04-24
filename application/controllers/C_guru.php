<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("Guru_model");
		$this->load->library('form_validation');
		
    }

    public function index()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
        
    }

    public function add()
    {
        $tambah = $this->Guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
        }
        
        $data["guru"]=$this->Guru_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        
    }

    public function edit($id_guru=null)
    {
         var_dump($id_guru);
        if (!isset($id_guru)) redirect('c_guru');

        
        $var = $this->Guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        // $data["guru"]=$this->Guru_model->getAll();
        // $this->load->view("template/header");
        // $this->load->view("admin/listguru", $data);
        // $this->load->view("template/sidebar");
        // $this->load->view("template/footer");

        $data["guru"] = $var->getById($id_guru);
        if (!$data["guru"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("admin/editguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
    }

    public function delete($id_guru=null)
    {
        if (!isset($id_guru)) show_404();
        
        if ($this->Guru_model->delete($id_guru)) {
        $data["guru"]=$this->Guru_model->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listguru", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
        }
    }
}

// class Guru extends CI_Controller
// {
//     public function index()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/home');
//         $this->load->view('template_guru/footer');
//     }
//     public function biodata()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/biodata');
//         $this->load->view('template_guru/footer');
//     }
//     public function isinilai()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/isinilai');
//         $this->load->view('template_guru/footer');
//     }
//     public function jadwal()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/jadwal');
//         $this->load->view('template_guru/footer');
//     }
//     public function nilai()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/nilai');
//         $this->load->view('template_guru/footer');
//     }
//     public function tambahnilai()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/tambahnilai');
//         $this->load->view('template_guru/footer');
//     }
//     public function editbiodata()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/editbiodata');
//         $this->load->view('template_guru/footer');
//     }
//     public function password()
//     {
//         $this->load->view('template_guru/header');
//         $this->load->view('template_guru/sidebar');
//         $this->load->view('guru/password');
//         $this->load->view('template_guru/footer');
//     }
// }
