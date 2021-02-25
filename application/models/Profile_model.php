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
    function get_data_lambang(){
        $query = $this->db->select('*')->from('lambang')->get();
        return $query->result();
    }
    function get_data_rpengembangan(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','3')->get();
        return $query->result();
    }
}
?>