<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function konfigurasi($title , $c_des=null) {
	
	$CI = get_instance() ;
	$CI->load->model('Konfigurasi_model') ;
	$site = $CI->Konfigurasi_model->listing() ;
	$data = array(
		'title'  		=> 		$title. ' | '.$site['nama_website'] ,
		'logo' 			=> 		$site['logo'] ,
		'favicon' 		=> 		$site['favicon'] ,
		'email'			=> 		$site['email'] ,
		'no_telp' 		=> 		$site['no_telp'] ,
		'alamat' 		=> 		$site['alamat'] ,
		'facebook' 		=> 		$site['facebook'] ,
		'instagram' 	=> 		$site['instagram'] ,
		'keywords' 		=> 		$site['keywords'] ,
		'metatext' 		=> 		$site['metatext'] ,
		'about' 		=> 		$site['about'] ,
		'site' 			=> 		$site['site'] ,
		'c_judul' 		=> 		$title ,
		'c_des' 		=> 		$c_des ,
	) ;

}
