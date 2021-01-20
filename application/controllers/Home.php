<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model','hmd');
		$this->load->helper('text');
	}
	public function index()
	{
		$data['slider'] = $this->hmd->get_data_slider();
		$this->load->view('home',$data);
	}
}
