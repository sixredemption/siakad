<?php 
class guru extends CI_Controller{

    public function index(){
        $this->load->view('template_guru/header' );
        $this->load->view('template_guru/sidebar'); 
        $this->load->view('guru/home');
        $this->load->view('template_guru/footer'); 
        }

    public function biodata(){
        $this->load->view('template_guru/header' ); 
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/biodata');
        $this->load->view('template_guru/footer'); 
        }

    public function isinilai(){
        $this->load->view('template_guru/header' );
        $this->load->view('template_guru/sidebar'); 
        $this->load->view('guru/isinilai');
        $this->load->view('template_guru/footer'); 
        }

    public function jadwal(){
        $this->load->view('template_guru/header' );
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/jadwal'); 
        $this->load->view('template_guru/footer'); 
        }

    public function nilai(){
        $this->load->view('template_guru/header' ); 
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru/nilai');
        $this->load->view('template_guru/footer'); 
        }

    public function tambahnilai(){
        $this->load->view('template_guru/header' );
        $this->load->view('template_guru/sidebar'); 
        $this->load->view('guru/tambahnilai');
        $this->load->view('template_guru/footer'); 
        }

    public function editbiodata(){
        $this->load->view('template_guru/header' );
        $this->load->view('template_guru/sidebar'); 
        $this->load->view('guru/editbiodata');
        $this->load->view('template_guru/footer'); 
        }

}