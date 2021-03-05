<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Fasilitas_model','fsm');
	}
	public function fasilitas()
	{
		$data['fasilitas'] = $this->fsm->get_data_fasilitas();
		$this->load->view('fasilitas',$data);
    }
    public function pustaka()
	{
		$data['pustaka'] = $this->fsm->get_data_pustaka();
		$this->load->view('pustaka',$data);
    }
    public function keginen()
	{
		$data['keginen'] = $this->fsm->get_data_keginen();
		$this->load->view('keginen',$data);
	}
	public function detail_keginen($id){
		$data['kategori'] = $this->fsm->get_data_kategori();
		$data['rpengembangan']	= $this->fsm->get_data_detail($id);
		$this->load->view('detail',$data);
	}
	public function detail_fasilitas($id){
		$data['kategori'] = $this->fsm->get_data_kategori();
		$data['rpengembangan']	= $this->fsm->get_data_detail($id);
		$this->load->view('detail',$data);
	}
	public function detail_pustaka($id){
		$data['kategori'] = $this->fsm->get_data_kategori();
		$data['rpengembangan']	= $this->fsm->get_data_detail($id);
		$this->load->view('detail',$data);
	}
}
