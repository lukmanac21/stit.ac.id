<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pstudi_model extends CI_MODEL{
    function get_data_pstudi(){
        $query = $this->db->select('*')->from('pstudi')->get();
        return $query->result();
    }
    function get_data_edit($id){
        $query = $this->db->select('*')->from('pstudi')->where('id =',$id)->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('pstudi',$data);
    }
    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('pstudi', $data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('pstudi');
    }
}
?>