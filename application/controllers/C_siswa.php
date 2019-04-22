<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_siswa");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["siswa"] = $this->M_siswa->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listsiswa", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
    }



    public function add()
    {
        $tambah = $this->M_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswa"] = $this->M_siswa->getAll();
        $this->load->view("template_admin/header");
        $this->load->view("admin/listsiswa", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
    }

    public function edit($id = null)
    {
        // var_dump($id);
        if (!isset($id)) redirect('c_siswa');


        $var = $this->M_siswa;
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

        $data["siswa"] = $var->getById($id);
        if (!$data["siswa"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("admin/editsiswa", $data);
        $this->load->view("template_admin/sidebar");
        $this->load->view("template_admin/footer");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_siswa->delete($id)) {
            $data["siswa"] = $this->M_siswa->getAll();
            $this->load->view("template_admin/header");
            $this->load->view("admin/listsiswa", $data);
            $this->load->view("template_admin/sidebar");
            $this->load->view("template_admin/footer");
        }
    }
}
