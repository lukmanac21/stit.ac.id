<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_MODEL{
    function get_data_kategori(){
        $query = $this->db->select('*')->from('kategori')->get();
        return $query->result();
    }
    function get_data_berita(){
        $query = $this->db->select('*')->from('berita')->get();
        return $query->result();
    }
    function get_edit_data($id){
        $query = $this->db->select('*')->from('berita')->where('id_berita',$id)->get();
        return $query->result();
    }
    function upload_file_berita(){
         
        $this->load->library('upload'); // Load librari upload
        $config['upload_path'] = './assets/images/berita/';
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
        $this->db->insert('berita',$data);
    }
    function insert_data_kategori($data){
        $this->db->insert('detail_kat_berita',$data);
    }
    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('berita', $data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('berita');
    }
    function delete_data_kategori($where){
        $this->db->where($where);
        $this->db->delete('detail_kat_berita');
    }
}
?>