<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemahasiswaan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kemahasiswaan_model','kem');
	}
	public function kemahasiswa()
	{
		$this->load->view('kemahasiswa');
    }
    public function komahasiswa()
	{
		$this->load->view('komahasiswa');
    }
}
