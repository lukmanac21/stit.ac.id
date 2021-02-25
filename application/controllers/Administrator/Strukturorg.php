<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strukturorg extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Strukturorg_model','srm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['struktur'] 		= $this->srm->get_data_struktur();

		$this->load->view('Admin/strukturorg/index', $data);
	}
	public function save_data(){
        $data['keterangan'] 		= $this->input->post('keterangan');
		$file="";
        $upload 				= $this->srm->upload_file_struktur();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['gambar'] 			= $file ? $file : '';
        $this->srm->insert_data($data);
        echo $this->db->last_query();
		//redirect('Administrator/strukturorg/index');
	}
	public function edit_data($id){
		$data['struktur'] = $this->srm->get_edit_data($id);
		// echo $this->db->last_query();die();
		$this->load->view('Admin/strukturorg/ubah',$data);

	}
	public function update_data(){
		$images="";
        $upload 				= $this->srm->upload_file_struktur();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$images			= $file ? $file : '';
		if($images==null){
			$data['keterangan'] 		= $this->input->post('keterangan');
		}else{
			$data['keterangan'] 		= $this->input->post('keterangan');
			$data['gambar']				= $images;
		}
		$where['id'] = $this->input->post('id');
		$this->srm->update_data($data,$where);
		redirect('Administrator/strukturorg/index');
	}
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->srm->delete_data($where);
		redirect('Administrator/strukturorg/index'); 
	}
}