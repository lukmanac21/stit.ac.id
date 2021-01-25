<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Fasilitas_model','fsm');
	}
	public function fasilitas()
	{
		$this->load->view('fasilitas');
    }
    public function pustaka()
	{
		$this->load->view('pustaka');
    }
    public function keginen()
	{
		$this->load->view('keginen');
    }
}
