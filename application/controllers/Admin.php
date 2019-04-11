<?php
//  class Admin extends CI_Controller{

//     public function __construct()
//   {
//       parent::__construct();
//       $this->load->helper(array('form', 'url'));
//       $this->load->model("M_siswa");
//   }  
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') != "login") {
        //     redirect(base_url('login'));
        // }
        $this->load->helper(array('form', 'url'));
        $this->load->model("M_siswa");
        $this->load->model('login_model');
        if (empty($this->session->userdata('username')) and empty($this->session->userdata('password'))) {
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        $data['judul'] = "Wellcome To Administrator";
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
        $this->load->view('admin/listspp');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function listguru()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/listguru');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function listsiswa(){
        $data['siswa']=$this->M_siswa->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('admin/listsiswa',$data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function listadmin()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/listadmin');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function addguru()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/addguru');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
    public function addsiswa()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/addsiswa');
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
    public function uploadjadwal()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/jadwal');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
}
