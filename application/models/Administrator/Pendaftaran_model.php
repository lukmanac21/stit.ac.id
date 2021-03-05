<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_MODEL{
    function get_data_pendaftaran(){
        $query = $this->db->select('*')->from('pendaftaran')->get();
        return $query->result();
    }
    function get_data_jadwal(){
        $query = $this->db->select('*')->from('jadwal')->get();
        return $query->result();
    }
    function get_data_by_jadwal($where){
        $query = $this->db->select('*')->from('pendaftaran')->where($where)->get();
        return $query->result();
    }
}
?>