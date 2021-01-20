<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_MODEL{
    function get_data_visi(){
        $query = $this->db->select('*')->from('visi')->get();
        return $query->result();
    }
    function get_data_misi(){
        $query = $this->db->select('*')->from('misi')->get();
        return $query->result();
    }
    function get_data_tujuan(){
        $query = $this->db->select('*')->from('tujuan')->get();
        return $query->result();
    }
    function get_data_dosen(){
        $query = $this->db->select('*')->from('dosen')->get();
        return $query->result();
    }
    function get_data_staff(){
        $query = $this->db->select('*')->from('staff')->get();
        return $query->result();
    }
}
?>