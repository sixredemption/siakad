<?php
class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') != "login") {
        //     redirect(base_url('login'));
        // }
        $this->load->model('login_model');
        if (empty($this->session->userdata('nisn')) and empty($this->session->userdata('password'))) {
            redirect(base_url('login_siswa'));
        }
    }
    public function index()
    {
        $this->load->view('template_siswa/dashboard');
    }
}
