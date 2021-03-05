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
		$data['jadwal'] 			= $this->pdm->get_data_jadwal();
		$data['pendaftaran'] 		= $this->pdm->get_data_pendaftaran();
		$this->load->view('Admin/Pendaftaran/index', $data);
	}
	public function cari(){
		$where['id_jadwal'] 		= $this->input->post('jadwal');
		$data['pendaftaran']  		= $this->pdm->get_data_by_jadwal($where);
		// echo $this->db->last_query();
		$data['jadwal'] 			= $this->pdm->get_data_jadwal();
		$this->load->view('Admin/Pendaftaran/index', $data);
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->pdm->delete_data($where);
		redirect('Aministrator/Pendaftaran/index');
	}
}