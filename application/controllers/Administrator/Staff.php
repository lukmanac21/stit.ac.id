<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Staff_model','stm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['staff'] 		    = $this->stm->get_data_Staff();

		$this->load->view('Admin/Staff/index', $data);
	}
	public function save_data(){
		$data['nama'] 			= $this->input->post('nama');
		$data['jabatan'] 		= $this->input->post('jabatan');
		$file="";
        $upload 				= $this->stm->upload_file_Staff();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['file'] 			= $file ? $file : '';
		$this->stm->insert_data($data);
		redirect('Administrator/Staff/index');
	}
	public function edit_data($id){
		$data['jurnal'] 		= $this->stm->get_edit_data($id);

		// var_dump($data['jurnal']);
		$this->load->view('Admin/jurnal/ubah',$data);

	}
	public function update_data(){
		if(empty($this->input->post('file')))
		{
			$data['tanggal'] 		= $this->input->post('tanggal');
			$data['kategori_id'] 	= $this->input->post('kategori_id');
			$data['judul'] 			= $this->input->post('judul');
		}
		else{
			$data['tanggal'] 		= $this->input->post('tanggal');
			$data['kategori_id'] 	= $this->input->post('kategori_id');
			$data['judul'] 			= $this->input->post('judul');
			$file="";
			$upload 				= $this->stm->upload_file_jurnal();
			if ($upload['result'] == "success") { // Jika proses upload sukses
				$file = $upload['file']['file_name'];
				
			} else { // Jika proses upload gagal
				$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
			$data['file'] 			= $file ? $file : '';
		}
		$where['id'] = $this->input->post('id');
		$this->stm->update_data($data,$where);
		redirect('Administrator/jurnal/index');
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->stm->delete_data($where);
		redirect('Administrator/Staff/index'); 
	}
}