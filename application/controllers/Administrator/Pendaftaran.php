<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Pendaftaran_model','pdm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['pendaftaran'] 		= $this->pdm->get_data_pendaftaran();
		$this->load->view('Admin/Pendaftaran/index', $data);
	}
}