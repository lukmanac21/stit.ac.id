<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PMB extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('PMB_model','pbm');
		$this->load->helper('text');
	}
	public function pendaftaran()
	{
		$this->load->view('pendaftaran');
    }
    public function Simpan(){
		date_default_timezone_set('Asia/Jakarta');
		$check_time = date('Y-m-d');
		$check = $this->pbm->check_status($check_time)->num_rows();
		// echo $this->db->last_query();
		if($check){
			$id = $this->pbm->get_data_status($check_time);
			$data['id_jadwal']			= $id['id'];
			$data['program_studi'] 		= strtoupper($this->input->post('program_studi'));
			$data['nama'] 				= strtoupper($this->input->post('nama'));
			$data['tempat_lahir'] 		= strtoupper($this->input->post('tempat_lahir'));
			$data['tanggal_lahir'] 		= $this->input->post('tanggal_lahir');
			$data['jenis_kelamin'] 		= $this->input->post('jenis_kelamin');
			$data['alamat_siswa'] 		= strtoupper($this->input->post('alamat_siswa'));
			$data['kota'] 				= strtoupper($this->input->post('kota'));
			$data['kabupaten'] 			= strtoupper($this->input->post('kabupaten'));
			$data['kode_pos']	 		= $this->input->post('kode_pos');
			$data['asal_sekolah'] 		= strtoupper($this->input->post('asal_sekolah'));
			$data['alamat_sekolah'] 	= strtoupper($this->input->post('alamat_sekolah'));
			$data['jurusan'] 			= strtoupper($this->input->post('jurusan'));
			$data['nisn'] 				= $this->input->post('nisn');
			$data['no_ijasah'] 			= $this->input->post('no_ijasah');
			$data['tgl_ijasah'] 		= $this->input->post('tgl_ijasah');
			$data['nilai_un'] 			= $this->input->post('nilai_un');
			$data['nama_ayah'] 			= strtoupper($this->input->post('nama_ayah'));
			$data['pekerjaan_ayah'] 	= strtoupper($this->input->post('pekerjaan_ayah'));
			$data['penghasilan_ayah'] 	= $this->input->post('penghasilan_ayah');
			$data['pendidikan_ayah'] 	= strtoupper($this->input->post('pendidikan_ayah'));
			$data['nama_ibu'] 			= strtoupper($this->input->post('nama_ibu'));
			$data['pekerjaan_ibu'] 		= strtoupper($this->input->post('pekerjaan_ibu'));
			$data['penghasilan_ibu'] 	= $this->input->post('penghasilan_ibu');
			$data['pendidikan_ibu'] 	= strtoupper($this->input->post('pendidikan_ibu'));
			$data['no_kk'] 				= $this->input->post('no_kk');
			$images = "";
			$upload = $this->pbm->upload_gambar_siswa();
			if ($upload['result'] == "success") { // Jika proses upload sukses
			    $images = $upload['file']['file_name'];
			} else { // Jika proses upload gagal
			    $upload['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}

			$data['img'] = $images ? $images : '';
			var_dump($data);
			// $this->pbm->insert_data('pendaftaran', $data);
			// redirect('PMB/Pendaftaran');
		}
		else{
			echo '<script type="text/javascript">alert("Pendaftaran sudah ditutup!");
			window.location.href = "'.site_url("PMB/pendaftaran").'";
			</script>';
		}
	}
	public function jadwalpend(){
		$data['jadwal'] = $this->pbm->get_data_jadwal();
		//echo $this->db->last_query();
		$this->load->view('jadwalpendaf',$data);
	}
	public function syaratpend(){
		$data['syarat'] = $this->pbm->get_data_syarat();
		// echo $this->db->last_query();die();
		$this->load->view('syaratpendaf',$data );
	}
	public function pengumuman(){
		$this->load->view('pengumuman');
	}
}
