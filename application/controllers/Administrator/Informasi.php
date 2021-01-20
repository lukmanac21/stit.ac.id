<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Informasi_model','ifm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['informasi'] 		= $this->ifm->get_data_informasi();
		$this->load->view('Admin/Informasi/index', $data);
	}
	public function save_data(){
        $data['judul']   		= $this->input->post('judul');
        $data['uraian']   	    = $this->input->post('uraian');
		$this->ifm->insert_data($data);
		//echo $this->db->last_query();
		redirect('Administrator/Informasi/index');
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->ifm->delete_data($where);
		// echo $this->db->last_query();die();
		redirect('Administrator/Slider/index'); 
	}
}