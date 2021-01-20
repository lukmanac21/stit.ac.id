<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_MODEL{
    function get_data_Informasi(){
        $query = $this->db->select('*')->from('Informasi')->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('Informasi',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('Informasi');
    }
}
?>