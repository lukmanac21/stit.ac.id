<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Slider_model','slm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['slider'] 		= $this->slm->get_data_slider();
		$data['status']			= $this->slm->get_data_slider_status();
		$this->load->view('Admin/Slider/index', $data);
		// echo $this->db->last_query();die();
	}
	public function save_data(){
		$data['keterangan'] 	= $this->input->post('keterangan');
		$data['status'] 		= $this->input->post('status');
		$images="";
        $upload 				= $this->slm->upload_file_slider();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$images = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['nama'] 			= $images ? $images : '';
		$this->slm->insert_data($data);
		echo $this->db->last_query();
		//redirect('Administrator/Slider/index');
	}
	public function edit_data($id){
		$data['slider'] 		= $this->slm->get_data_slider_edit($id);
		$data['status']			= $this->slm->get_data_slider_status();
		$this->load->view('Admin/Slider/ubah', $data);
		// echo $this->db->last_query();die();
		
	}
	public function update_data(){
		$images="";
		$upload 				= $this->slm->upload_file_slider();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$images			= $file ? $file : '';
		if($images==null)
		{
			$data['keterangan'] 	= $this->input->post('keterangan');
			$data['status'] 		= $this->input->post('status');
		}
		else{
			$data['keterangan'] 	= $this->input->post('keterangan');
			$data['status'] 		= $this->input->post('status');
			$data['nama'] 		= $images;
		}
		$where['id_slider'] = $this->input->post('id');
		$this->slm->update_data($data,$where);
		redirect('Administrator/Slider/index');
	}
	public function delete_data(){
		$where['id_lambang'] = $this->input->post('id');
		$this->slm->delete_data($where);
		// echo $this->db->last_query();die();
		redirect('Administrator/Slider/index'); 
	}
}