<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Visi_model','vsm');
		$this->load->library('session');
	}
	public function index()
	{
        $data['visi'] = $this->vsm->get_data_visi();
		$this->load->view('Admin/Visi/index',$data);
    }
    public function save_data(){
        $data['visi'] = $this->input->post('visi');
        $this->vsm->insert_data($data);
        redirect('Administrator/Visi/index');
    }
    public function edit_data($id){
        $data['visi'] = $this->vsm->get_data_visi_edit($id);
		$this->load->view('Admin/Visi/ubah',$data);
    }
    public function update_data(){
        $data['visi'] = $this->input->post('visi');
        $where['id']  = $this->input->post('id');
        $this->vsm->update_data($data,$where);
        redirect('Administrator/Visi/index');
    }
    public function delete_data(){
        $where['id'] = $this->input->post('id');
		$this->vsm->delete_data($where);
		redirect('Administrator/Visi/index'); 
    }
}