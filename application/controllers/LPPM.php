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
		$this->load->view('kajianperiodik');
	}
	public function penelitian(){
		$this->load->view('penelitian');
	}
	public function pengabdian(){
		$this->load->view('pmasyarakat');
	}
	public function kostitta(){
		$this->load->view('kolstitta');
	}

}
