<?php
class Syarat extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Syarat_model','srm');
		$this->load->library('session');
	}
	public function index()
	{
		$data['jurusan'] 		= $this->srm->get_data_jurusan();
		$data['syarat'] 		= $this->srm->get_data_syarat();
		$this->load->view('Admin/Syarat/index', $data);
	}
	public function save_data(){
		$data['jurusan_id']   		= $this->input->post('jurusan_id');
        $data['judul']   		= $this->input->post('judul');
        $data['keterangan']   	    = $this->input->post('keterangan');
        // var_dump($data);die();
		$this->srm->insert_data($data);
		//echo $this->db->last_query();
		redirect('Administrator/Syarat/index');
    }
    public function edit_data($id){
		$data['jurusan'] 		= $this->srm->get_data_jurusan();
        $data['syarat'] = $this->srm->get_edit_data($id);
        $this->load->view('Admin/Syarat/ubah',$data);
    }
    public function update_data(){
		$where['id']            = $this->input->post('id');
		$data['jurusan_id']   		= $this->input->post('jurusan_id');
        $data['judul']   		= $this->input->post('judul');
        $data['keterangan']   	    = $this->input->post('keterangan');
        $this->srm->update_data($data,$where);
        //echo $this->db->last_query();die();
        redirect('Administrator/Syarat/index');
    }
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->srm->delete_data($where);
		// echo $this->db->last_query();die();
		redirect('Administrator/Syarat/index'); 
	}
}
?>