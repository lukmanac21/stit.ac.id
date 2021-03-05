<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Dosen_model','dsm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['dosen'] 		= $this->dsm->get_data_Dosen();

		$this->load->view('Admin/Dosen/index', $data);
	}
	public function save_data(){
        $data['nama'] 		= $this->input->post('nama');
        $data['matakuliah'] = $this->input->post('matkul');
		$file="";
        $upload 				= $this->dsm->upload_file_Dosen();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['file'] 			= $file ? $file : '';
        $this->dsm->insert_data($data);
        // echo $this->db->last_query();
		redirect('Administrator/Dosen/index');
	}
	public function edit_data($id){
		$data['dosen'] = $this->dsm->get_edit_data($id);
		// echo $this->db->last_query();die();
		$this->load->view('Admin/Dosen/ubah',$data);

	}
	public function update_data(){
		$file="";
		$upload 				= $this->dsm->upload_file_Dosen();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$images 			= $file ? $file : '';
		
		if($images== null)
		{
			$data['nama'] 		= $this->input->post('nama');
        	$data['matakuliah'] = $this->input->post('matkul');
		}
		else{
			$data['nama'] 		= $this->input->post('nama');
			$data['matakuliah'] = $this->input->post('matkul');
			$data['file']		= $images;

		}
		$where['id'] = $this->input->post('id');
		$this->dsm->update_data($data,$where);
		redirect('Administrator/Dosen/index');
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->dsm->delete_data($where);
		redirect('Administrator/Dosen/index'); 
	}
}