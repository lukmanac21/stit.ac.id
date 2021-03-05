<?php
class Syarat_model extends CI_Model{
    function get_data_syarat(){
        $query = $this->db->select('syarat.*, jurusan.nama')->from('syarat')->join('jurusan','syarat.jurusan_id = jurusan.id')->get();
        return $query->result();
    }
    function get_data_jurusan(){
        $query = $this->db->select('*')->from('jurusan')->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('syarat',$data);
    }
    function get_edit_data($id){
        $query = $this->db->select('*')->from('syarat')->where('id = ',$id)->get();
        return $query->result();
    }
    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('syarat',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('syarat');
    }
}
?>