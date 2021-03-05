<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LPPM extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('LPPM_model','lpm');
	}
	public function Jurnal(){
		$data['jurnal'] = $this->lpm->get_data_jurnal();
		$this->load->view('jurnal',$data);
	}
	public function Download_action($fileName = null){
		$file = realpath ( "assets/file/jurnal" ) . "\\" . $fileName;
		$data = file_get_contents ( $file );
		force_download ( $fileName, $data );
	}
	public function kajianperiodik(){
		$data['kajian'] = $this->lpm->get_data_kajian();
		$this->load->view('kajianperiodik',$data);
	}
	public function detail_kajian($id){
		$data['kategori'] = $this->lpm->get_data_kategori();
		$data['rpengembangan']	= $this->lpm->get_data_detail($id);
		$this->load->view('detail',$data);
	}
	public function penelitian(){
		$data['penelitian'] = $this->lpm->get_data_penelitian();
		$this->load->view('penelitian',$data);
	}
	public function detail_penelitian($id){
		$data['kategori'] = $this->lpm->get_data_kategori_penelitian();
		$data['penelitian'] = $this->lpm->get_detail_penelitian($id);
		$this->load->view('detail_penelitian',$data);
	}
	public function pengabdian(){
		$data['pengabdian'] = $this->lpm->get_data_pengabdian();
		$this->load->view('pmasyarakat',$data);
	}
	public function kostitta(){
		$data['kategori'] = $this->lpm->get_data_kategori();
		$data['kolom'] = $this->lpm->get_data_kolom();
		$this->load->view('kolstitta',$data);
	}
	public function detail_pengabdian($id){
		$data['kategori'] = $this->lpm->get_data_kategori();
		$data['rpengembangan']	= $this->lpm->get_data_detail($id);
		$this->load->view('detail',$data);
	}
	public function detail_kolom($id){
		$data['kategori'] = $this->lpm->get_data_kategori();
		$data['rpengembangan']	= $this->lpm->get_data_detail($id);
		$this->load->view('detail',$data);
	}

}
