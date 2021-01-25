<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemahasiswaan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kemahasiswaan_model','kem');
	}
	public function kemahasiswa()
	{
		$data['kegiatan'] = $this->kem->get_data_kegiatan();
		$this->load->view('kemahasiswa',$data);
    }
    public function komahasiswa()
	{
		$this->load->view('komahasiswa');
    }
}
