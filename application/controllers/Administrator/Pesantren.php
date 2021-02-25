<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesantren extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Pesantren_model','psm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['pesantren'] 		= $this->psm->get_data_pesantren();
		$this->load->view('Admin/Pesantren/index', $data);
    }
    public function save_data(){
        $data['judul']   		    = $this->input->post('judul');
        $data['keterangan']   	    = $this->input->post('keterangan');
		$this->psm->insert_data($data);
		redirect('Administrator/Pesantren/index');
	}
    public function edit_data($id){
        $data['pesantren']      = $this->psm->get_edit_data($id);
        $this->load->view('Admin/Pesantren/ubah',$data);
    }
    public function update_data(){
        $where['id']        = $this->input->post('id');
        $data['judul']      = $this->input->post('judul');
        $data['keterangan'] = $this->input->post('keterangan');
        $this->psm->update_data($data,$where);
        //echo $this->db->last_query();die();
        redirect('Administrator/Pesantren/index');
    }
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->psm->delete_data($where);
		redirect('Administrator/Pesantren/index'); 
	}
}