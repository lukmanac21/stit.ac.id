<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik_model extends CI_MODEL{

    function get_data_informasi(){
        $query = $this->db->select('*')->from('informasi')->get();
        return $query->result();
    }
    function get_data_pstudi(){
        $query = $this->db->select('*')->from('pstudi')->get();
        return $query->result();
    }
}
?>