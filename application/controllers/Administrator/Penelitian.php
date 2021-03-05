<?php 
class Penelitian extends CI_CONTROLLER{
    function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Penelitian_model','pnm');
		$this->load->library('session');
	}
	public function index()
	{
        $data['penelitian'] 		= $this->pnm->get_data_penelitian();
        $data['kategori']           = $this->pnm->get_data_kategori();
		$this->load->view('Admin/Penelitian/index', $data);
	}
	public function save_data(){
        $data['kategori_id']   	    = $this->input->post('kategori_id');
        $data['tanggal']   	        = $this->input->post('tanggal');
        $data['judul']   	        = $this->input->post('judul');
        $data['keterangan']   	    = $this->input->post('keterangan');
        $file="";
        $upload 				= $this->pnm->upload_file_penelitian();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$data['file'] 			= $file ? $file : '';
        // var_dump($data);die();
		$this->pnm->insert_data($data);
		//echo $this->db->last_query();
		redirect('Administrator/Penelitian/index');
    }
    public function edit_data($id){
        $data['kategori']           = $this->pnm->get_data_kategori();
        $data['penelitian']         = $this->pnm->get_edit_data($id);
        $this->load->view('Admin/Penelitian/ubah',$data);
    }
    public function update_data(){
        $where['id']                = $this->input->post('id');
        $file="";
		$upload 				= $this->pnm->upload_file_penelitian();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
		$images 			= $file ? $file : '';
		
		if($images== null)
		{
        $data['kategori_id']   	    = $this->input->post('kategori_id');
        $data['tanggal']   	        = $this->input->post('tanggal');
        $data['judul']   	        = $this->input->post('judul');
        $data['keterangan']   	    = $this->input->post('keterangan');
        }
        else{
            $data['kategori_id']   	    = $this->input->post('kategori_id');
            $data['tanggal']   	        = $this->input->post('tanggal');
            $data['judul']   	        = $this->input->post('judul');
            $data['keterangan']   	    = $this->input->post('keterangan');
            $data['file']               = $images;
        }
        $this->pnm->update_data($data,$where);
        //echo $this->db->last_query();die();
        redirect('Administrator/Penelitian/index');
    }
	public function delete_data(){
		$where['id'] = $this->input->post('id');
		$this->pnm->delete_data($where);
		// echo $this->db->last_query();die();
		redirect('Administrator/Penelitian/index'); 
	}
}?>