<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemahasiswaan_model extends CI_MODEL{
    function get_data_kegiatan(){
        $query = $this->db->select('*')->from('kegiatan')->get();
        return $query->result();
    }
}
?>