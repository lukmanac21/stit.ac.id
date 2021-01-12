<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Profile_model','prm');
		$this->load->helper('text');
	}
	public function visimisi()
	{
		$data['visi'] = $this->prm->get_data_visi();
		$this->load->view('visimisi',$data);
    }
    public function lambang()
	{
		$this->load->view('lambang');
    }
    public function dosen()
	{
		$this->load->view('dosen');
    }
    public function staff()
	{
		$this->load->view('staff');
    }
    public function pembangunan()
	{
		$this->load->view('pembangunan');
	}
}
