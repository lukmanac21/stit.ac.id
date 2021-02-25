<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Tujuan_model','tjm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['tujuan'] = $this->tjm->get_data_tujuan();
		$this->load->view('Admin/Tujuan/index',$data);
	}
	public function save_data(){
        $data['tujuan'] = $this->input->post('tujuan');
        $this->tjm->insert_data($data);
        redirect('Administrator/Tujuan/index');
	}
	public function edit_data($id){
		$data['tujuan'] = $this->tjm->get_data_tujuan_edit($id);
		$this->load->view('Admin/Tujuan/ubah',$data);
	}
	public function update_data(){
		$data['tujuan'] = $this->input->post('tujuan');
		$where['id']	= $this->input->post('id');
        $this->tjm->update_data($data,$where);
        redirect('Administrator/Tujuan/index');
	}
    public function delete_data(){
        $where['id'] = $this->input->post('id');
		$this->tjm->delete_data($where);
		redirect('Administrator/Tujuan/index'); 
    }
}