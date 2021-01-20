<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Adminitrator/Jurnal_model','jrm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['kategori'] 		= $this->jrm->get_data_kategori();
		$data['jurnal'] 		= $this->jrm->get_data_jurnal();

		$this->load->view('Admin/Jurnal/index', $data);
	}
	public function save_data(){
        $data['tanggal'] 		= $this->input->post('tanggal');
        $data['kategori_id'] 		= $this->input->post('kategori_id');
        $data['judul'] 			= $this->input->post('judul');
		$file="";
        $upload 				= $this->jrm->upload_file_jurnal();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['file'] 			= $file ? $file : '';
		$this->jrm->insert_data($data);
		redirect('Administrator/Jurnal/index');
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->jrm->delete_data($where);
		redirect('Administrator/Jurnal/index'); 
	}
}