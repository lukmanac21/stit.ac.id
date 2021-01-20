<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Misi_model extends CI_MODEL{
    function get_data_misi(){
        $query = $this->db->select('*')->from('misi')->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('misi',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('misi');
    }
}
?>