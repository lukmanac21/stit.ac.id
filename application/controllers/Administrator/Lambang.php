<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lambang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/lambang_model','lbm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['lambang'] 		= $this->lbm->get_data_lambang();
		$this->load->view('Admin/lambang/index', $data);
		// echo $this->db->last_query();die();
	}
	public function save_data(){
		$data['keterangan'] 	= $this->input->post('keterangan');
		$images="";
        $upload 				= $this->lbm->upload_file_lambang();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$images = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['nama'] 			= $images ? $images : '';
		$this->lbm->insert_data($data);
		//echo $this->db->last_query();
		redirect('Administrator/lambang/index');
	}
	public function edit_data($id){
		$data['lambang'] 		= $this->lbm->get_data_lambang_edit($id);
		$this->load->view('Admin/lambang/ubah', $data);
		// echo $this->db->last_query();die();
		
	}
	public function update_data(){
		$data['keterangan'] 	= $this->input->post('keterangan');	
		$images="";
		$upload 				= $this->lbm->upload_file_lambang();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$images = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['nama'] 			= $images ? $images : '';

		$where['id'] = $this->input->post('id');
		$this->lbm->update_data($data,$where);
		redirect('Administrator/lambang/index');
		//echo $this->db->last_query();die();
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->lbm->delete_data($where);
		// echo $this->db->last_query();die();
		redirect('Administrator/lambang/index'); 
	}
}