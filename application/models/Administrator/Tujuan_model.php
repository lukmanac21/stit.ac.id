<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan_model extends CI_MODEL{
    function get_data_tujuan(){
        $query = $this->db->select('*')->from('tujuan')->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('tujuan',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('tujuan');
    }
}
?>