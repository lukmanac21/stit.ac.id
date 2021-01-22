<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_MODEL{
    function get_data_dosen(){
        $query = $this->db->select('*')->from('dosen')->get();
        return $query->result();
    }
    function upload_file_dosen(){
         
        $this->load->library('upload'); // Load librari upload
        
        
        $config['upload_path'] = './assets/images/dosen/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
                $this->upload->initialize($config); // Load konfigurasi uploadnya
                if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    function insert_data($data){
        $this->db->insert('dosen',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('dosen');
    }

}
?>