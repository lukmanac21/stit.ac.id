<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PMB extends CI_Controller {
	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('Profile_model','prm');
	// 	$this->load->helper('text');
	// }
	public function Pendaftaran()
	{
		$this->load->view('pendaftaran');
    }
    public function Simpan(){
        
	}
	public function jadwalpend(){
		$this->load->view('jadwalpendaf');
	}
	public function syaratpend(){
		$this->load->view('syaratpendaf');
	}
	public function pengumuman(){
		$this->load->view('pengumuman');
	}
}
