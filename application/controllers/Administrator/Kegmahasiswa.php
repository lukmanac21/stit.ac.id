<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kegmahasiswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/kegmahasiswa_model','kgm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['kegiatan'] 		= $this->kgm->get_data_kegiatan();

		$this->load->view('Admin/kegmahasiswa/index', $data);
	}
	public function save_data(){
        $data['tanggal'] 		= $this->input->post('tanggal');
        $data['uraian'] 		= $this->input->post('uraian');
        $data['judul'] 			= $this->input->post('judul');
		$file="";
        $upload 				= $this->kgm->upload_file_kegiatan();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['file'] 			= $file ? $file : '';
		$this->kgm->insert_data($data);
		redirect('Administrator/kegmahasiswa/index');
	}
	public function edit_data($id){
		$data['kegiatan'] 		= $this->kgm->get_edit_data($id);

		// var_dump($data['Kegiatan']);
		$this->load->view('Admin/kegmahasiswa/ubah',$data);

	}
	public function update_data(){
		if(empty($this->input->post('file')))
		{
			$data['tanggal'] 		= $this->input->post('tanggal');
			$data['uraian'] 		= $this->input->post('uraian');
			$data['judul'] 			= $this->input->post('judul');
		}
		else{
			$data['tanggal'] 		= $this->input->post('tanggal');
			$data['uraian'] 		= $this->input->post('uraian');
			$data['judul'] 			= $this->input->post('judul');
			$file="";
			$upload 				= $this->kgm->upload_file_kegiatan();
			if ($upload['result'] == "success") { // Jika proses upload sukses
				$file = $upload['file']['file_name'];
				
			} else { // Jika proses upload gagal
				$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
			$data['file'] 			= $file ? $file : '';
		}
		$where['id'] = $this->input->post('id');
		$this->kgm->update_data($data,$where);
		redirect('Administrator/kegmahasiswa/index');
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->kgm->delete_data($where);
		redirect('Administrator/kegmahasiswa/index'); 
	}
}