<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_MODEL{
    function get_data_pendaftaran(){
        $query = $this->db->select('*')->from('pendaftaran')->get();
        return $query->result();
    }
}
?>