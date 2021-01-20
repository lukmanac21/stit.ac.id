<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_MODEL{

    function get_data_slider(){
        $query = $this->db->select('*')->from('slider')->where('status',1)->get();
        return $query->result();
    }
}
?>