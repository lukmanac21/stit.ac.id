<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_model extends CI_MODEL{
    function get_data_visi(){
        $query = $this->db->select('*')->from('visi')->get();
        return $query->result();
    }
    function get_data_visi_edit($id){
        $query = $this->db->select('*')->from('visi')->where('id',$id)->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('visi',$data);
    }
    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('visi', $data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('visi');
    }
}
?>