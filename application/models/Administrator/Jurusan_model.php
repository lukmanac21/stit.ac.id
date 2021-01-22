<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_MODEL{
    function get_data_jurusan(){
        $query = $this->db->select('*')->from('jurusan')->get();
        return $query->result();
    }
    function insert_data($data){
        $this->db->insert('jurusan',$data);
    }
    function delete_data($where){
        $this->db->where($where);
        $this->db->delete('jurusan');
    }
}
?>