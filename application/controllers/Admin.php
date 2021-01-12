<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('Profile_model','prm');
	// 	$this->load->helper('text');
	// }
	public function index()
	{

		$this->load->view('Admin/login');
    }
    public function check_login(){
        $this->load->view('Admin/dashboard');
    }
}
