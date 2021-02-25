<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kolommhs extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Kolommhs_model','ksm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['kolommhs'] 		= $this->ksm->get_data_kolommhs();
		$this->load->view('Admin/Kolommhs/index', $data);
    }
    public function save_data(){
        $data['judul']   		    = $this->input->post('judul');
        $data['keterangan']   	    = $this->input->post('keterangan');
		$this->ksm->insert_data($data);
		redirect('Administrator/Kolommhs/index');
	}
    public function edit_data($id){
        $data['kolommhs']      = $this->ksm->get_edit_data($id);
        $this->load->view('Admin/Kolommhs/ubah',$data);
    }
    public function update_data(){
        $where['id']        = $this->input->post('id');
        $data['judul']      = $this->input->post('judul');
        $data['keterangan'] = $this->input->post('keterangan');
        $this->ksm->update_data($data,$where);
        //echo $this->db->last_query();die();
        redirect('Administrator/Kolommhs/index');
    }
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->ksm	->delete_data($where);
		redirect('Administrator/Kolommhs/index'); 
	}
}