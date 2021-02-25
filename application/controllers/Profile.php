<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Profile_model','prm');
	}
	public function visimisi()
	{
		$data['visi'] = $this->prm->get_data_visi();
		$data['misi'] = $this->prm->get_data_misi();
		$data['tujuan'] = $this->prm->get_data_tujuan();
		$this->load->view('visimisi',$data);
    }
    public function lambang()
	{
		$data['lambang'] = $this->prm->get_data_lambang();
		$this->load->view('lambang',$data);
    }
    public function dosen()
	{
		$data['dosen'] = $this->prm->get_data_dosen();
		$this->load->view('dosen',$data);
    }
    public function staff()
	{
		$data['staff'] = $this->prm->get_data_staff();
		$this->load->view('staff',$data);
    }
    public function rpengembangan()
	{
		$data['rpengembangan'] = $this->prm->get_data_rpengembangan();
		//echo $this->db->last_query();die();
		$this->load->view('rpengembangan',$data);
		
	}
	public function strukturorg(){
		$this->load->view('strukturorg');
	}
}
