<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Misi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Misi_model','msm');
		$this->load->library('session');
	}
	public function index()
	{
        $data['misi'] = $this->msm->get_data_misi();
		$this->load->view('Admin/Misi/index',$data);
    }
    public function save_data(){
        $data['misi'] = $this->input->post('misi');
        $this->msm->insert_data($data);
        redirect('Administrator/Misi/index');
	}
	public function edit_data($id){
		$data['misi'] = $this->msm->get_data_misi_edit($id);
		$this->load->view('Admin/Misi/ubah',$data);
	}
	public function update_data(){
		$data['misi'] = $this->input->post('misi');
		$where['id'] = $this->input->post('id');
        $this->msm->update_data($data,$where);
        redirect('Administrator/Misi/index');
	}
    public function delete_data(){
        $where['id'] = $this->input->post('id');
		$this->msm->delete_data($where);
		redirect('Administrator/Misi/index'); 
    }
}