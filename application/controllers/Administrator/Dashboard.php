<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model','dbm');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('Admin/dashboard');
    }
}