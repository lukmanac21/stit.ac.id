<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Jurusan_model','ksm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['jurusan'] 		= $this->ksm->get_data_Jurusan();
		$this->load->view('Admin/Jurusan/index', $data);
    }
    public function save_data(){
        $data['nama']   		    = $this->input->post('nama');
        $data['keterangan']   	    = $this->input->post('keterangan');
		$this->ksm->insert_data($data);
		redirect('Administrator/Jurusan/index');
	}
    public function edit_data($id){
        $data['jurusan']      = $this->ksm->get_edit_data($id);
        $this->load->view('Admin/Jurusan/ubah',$data);
    }
    public function update_data(){
        $where['id']        = $this->input->post('id');
        $data['nama']   		    = $this->input->post('nama');
        $data['keterangan'] = $this->input->post('keterangan');
        $this->ksm->update_data($data,$where);
        //echo $this->db->last_query();die();
        redirect('Administrator/Jurusan/index');
    }
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->ksm	->delete_data($where);
		redirect('Administrator/Jurusan/index'); 
	}
}