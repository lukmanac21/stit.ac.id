<?php
class Berita extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('Administrator/Berita_model','brm');
		$this->load->library('session');
	}
    public function index(){
        $data['kategori'] 		= $this->brm->get_data_kategori();
        $data['berita'] 		= $this->brm->get_data_berita();
		$this->load->view('Admin/Berita/index', $data);
    }
    public function save_data(){
        $data['tanggal']        = $this->input->post('tanggal');
        $data['judul'] 		    = $this->input->post('judul');
        $data['isi_berita']     = $this->input->post('isi_berita');
		$file="";
        $upload 				= $this->brm->upload_file_berita();
		if ($upload['result'] == "success") { // Jika proses upload sukses
			$file = $upload['file']['file_name'];
			
		} else { // Jika proses upload gagal
			$upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		}
        $data['images'] 			= $file ? $file : '';
        // var_dump($data);
        $this->brm->insert_data($data);

        $id_berita = $this->db->insert_id();
        
        $data['id_kategori'] = $this->input->post('id_kategori');
        foreach($data['id_kategori'] as $row_data){
            $data_detail = array(
                'id_berita'     => $id_berita,
                'id_kategori'   => $row_data
            );
            $this->brm->insert_data_kategori($data_detail);
        }
        // echo $this->db->last_query();die();
		redirect('Administrator/Berita/index');
    }
    public function edit_data($id){
        $data['kategori'] 		= $this->brm->get_data_kategori();
		$data['berita']         = $this->brm->get_edit_data($id);
		// echo $this->db->last_query();die();
		$this->load->view('Admin/Berita/ubah',$data);
    }
    public function update_data(){
        $file="";
        $upload 				= $this->brm->upload_file_berita();
        if ($upload['result'] == "success") { // Jika proses upload sukses
            $file = $upload['file']['file_name'];
            
        } else { // Jika proses upload gagal
            $upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
        }
        $images = $file ? $file : '';

        if($images == null){
            $data['tanggal']        = $this->input->post('tanggal');
            $data['judul'] 		    = $this->input->post('judul');
            $data['isi_berita']     = $this->input->post('isi_berita');
            // echo'Gambar Kosong';

        }
        else{
            // echo $data['file'];
            $data['tanggal']        = $this->input->post('tanggal');
            $data['judul'] 		    = $this->input->post('judul');
            $data['isi_berita']     = $this->input->post('isi_berita');
            $data['images']         = $images;
 
        }

        $where['id_berita']                = $this->input->post('id');
        $this->brm->delete_data_kategori($where);
        // echo $this->db->last_query();die();

        $this->brm->update_data($data, $where);
        
        $data['id_kategori'] = $this->input->post('id_kategori');
        foreach($data['id_kategori'] as $row_data){
            $data_detail = array(
                'id_berita'     => $where['id_berita'],
                'id_kategori'   => $row_data
            );
            $this->brm->insert_data_kategori($data_detail);
        }
		redirect('Administrator/Berita/index');
    }
    public function delete_data(){
		$where['id_berita'] = $this->input->post('id');
        $this->brm->delete_data($where);
        $this->brm->delete_data_kategori($where);
		redirect('Administrator/Berita/index'); 
	}
}
?>