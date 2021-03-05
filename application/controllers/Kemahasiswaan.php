<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemahasiswaan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kemahasiswaan_model','kem');
	}
	public function kemahasiswa()
	{
		$data['kegiatan'] = $this->kem->get_data_kegiatan();
		$this->load->view('kemahasiswa',$data);
    }
    public function komahasiswa()
	{
		$data['kolommhs'] = $this->kem->get_data_kolom();
		$this->load->view('komahasiswa',$data);
	}
	public function detail_kegiatan($id){
		$data['kategori'] = $this->kem->get_data_kategori();
		$data['rpengembangan']	= $this->kem->get_data_detail($id);
		$this->load->view('detail',$data);
	}
	public function detail_kolommhs($id){
		$data['kategori'] = $this->kem->get_data_kategori();
		$data['rpengembangan']	= $this->kem->get_data_detail($id);
		$this->load->view('detail',$data);
	}
}
