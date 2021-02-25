<?php
class Jadwal_model extends CI_Model{
    function get_data_jadwal(){
        $query = $this->db->select('*')->from('jadwal')->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('jadwal',$data);
    }
    function get_edit_data($id){
        $query = $this->db->select('*')->from('jadwal')->where('id = ',$id)->get();
        return $query->result();
    }
    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('jadwal',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('jadwal');
    }
}
?>