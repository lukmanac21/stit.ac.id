<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PMB_model extends CI_MODEL{
    public function upload_gambar_siswa()
    {
        $this->load->library('upload'); // Load librari upload
        $config['upload_path'] = './assets/images/siswa/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    function insert_data($table,$data){
        $this->db->insert($table,$data);
    }
    function get_data_jadwal(){
        $query = $this->db->select('*')->from('jadwal')->order_by('id','DESC')->get();
        return $query->result();
    }
    function check_status($date){
        return $this->db->select('*')->from('jadwal')->where('tgl_mulai <=',$date)->where('tgl_selesai >=',$date)->where('status =',0)->get();
    }
    function get_data_status($date){
        $query = $this->db->select('*')->from('jadwal')->where('tgl_mulai <=',$date)->where('tgl_selesai >=',$date)->where('status =',0)->get();
        return $query->row_array();
    }
    function get_data_syarat(){
        $query = $this->db->select('syarat.keterangan , jurusan.nama')->from('syarat')->join('jurusan','syarat.jurusan_id = jurusan.id','left')->group_by('syarat.id')->get();
        return $query->result();
    }

}
?>