<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_MODEL{

    function get_data_slider(){
        $query = $this->db->select('*')->from('slider')->where('status',1)->get();
        return $query->result();
    }
    function get_data_berita(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','1')->get();
        return $query->result();
    }
}
?>