<?php
class Jadwal extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Jadwal_model','jdm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['jadwal'] 		= $this->jdm->get_data_Jadwal();
		$this->load->view('Admin/Jadwal/index', $data);
	}
	public function save_data(){
        $data['tahun']   		= $this->input->post('tahun');
        $data['periode']   	    = $this->input->post('periode');
        $data['tgl_mulai']   	= date("Y-m-d",strtotime($this->input->post('tgl_mulai')));
        $data['tgl_selesai']   	= date("Y-m-d",strtotime($this->input->post('tgl_akhir')));
        $data['status']         = '0';
        //var_dump($data);die();
		$this->jdm->insert_data($data);
		//echo $this->db->last_query();
		redirect('Administrator/Jadwal/index');
    }
    public function edit_data($id){
        $data['jadwal'] = $this->jdm->get_edit_data($id);
        $this->load->view('Admin/Jadwal/ubah',$data);
    }
    public function update_data(){
        $where['id']            = $this->input->post('id');
        $data['tahun']   		= $this->input->post('tahun');
        $data['periode']   	    = $this->input->post('periode');
        $data['tgl_mulai']   	= date("Y-m-d",strtotime($this->input->post('tgl_mulai')));
        $data['tgl_selesai']   	= date("Y-m-d",strtotime($this->input->post('tgl_akhir')));
        $data['status']         = $this->input->post('status');
        $this->jdm->update_data($data,$where);
        //echo $this->db->last_query();die();
        redirect('Administrator/Jadwal/index');
    }
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->jdm->delete_data($where);
		// echo $this->db->last_query();die();
		redirect('Administrator/Jadwal/index'); 
	}
}
?>