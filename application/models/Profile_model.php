<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_MODEL{
    function get_data_visi(){
        $query = $this->db->select('*')->from('visi')->get();
        return $query->result();
    }
}
?>