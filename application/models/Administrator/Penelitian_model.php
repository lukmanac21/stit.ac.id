<?php 
class Penelitian_model extends CI_MODEL{
    function get_data_penelitian(){
        $query = $this->db->select('pn.*, kj.nama')->from('penelitian pn')->join('kategori_jurnal kj','pn.kategori_id = kj.id')->get();
        return $query->result();
    }
    function get_data_kategori(){
        $query = $this->db->select('*')->from('kategori_jurnal')->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('penelitian',$data);
    }
    function get_edit_data($id){
        $query = $this->db->select('*')->from('penelitian')->where('id = ',$id)->get();
        return $query->result();
    }
    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('penelitian',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('penelitian');
    }
    function upload_file_penelitian(){
        $this->load->library('upload'); // Load librari upload
        $config['upload_path'] = './assets/images/penelitian/';
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
}?>