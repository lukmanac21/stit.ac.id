<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('Profile_model','prm');
	// 	$this->load->helper('text');
	// }
	public function index()
	{

		$this->load->view('home');
	}
}
