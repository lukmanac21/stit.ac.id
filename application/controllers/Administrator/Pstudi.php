<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pstudi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Pstudi_model','psm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['pstudi'] 		= $this->psm->get_data_pstudi();
		$this->load->view('Admin/Pstudi/index', $data);
	}
	public function save_data(){
        $data['jurusan']   		= $this->input->post('jurusan');
        $data['uraian']   	    = $this->input->post('uraian');
		$this->psm->insert_data($data);
		//echo $this->db->last_query();
		redirect('Administrator/Pstudi/index');
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->psm->delete_data($where);
		// echo $this->db->last_query();die();
		redirect('Administrator/Pstudi/index'); 
	}
}