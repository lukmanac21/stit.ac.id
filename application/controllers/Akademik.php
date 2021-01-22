<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Akademik_model','akm');
	}
	public function informasi()
	{
		$data['informasi'] = $this->akm->get_data_informasi();
		$this->load->view('informasi',$data);
    }
    public function pstudi()
	{
		$data['pstudi']    = $this->akm->get_data_pstudi();
		$this->load->view('pstudi',$data);
    }
    public function pesantren()
	{
		$this->load->view('pesantren');
    }
}
