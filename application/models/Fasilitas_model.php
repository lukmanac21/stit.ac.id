<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_model extends CI_MODEL{
    function get_data_keginen(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','6')->get();
        return $query->result();
    }
    function get_data_detail($id){
        $query = $this->db->select('*')->from('berita')->where('id_berita =',$id)->get();
        return $query->result();
    }
    function get_data_kategori(){
        $query = $this->db->select('*')->from('kategori')->get();
        return $query->result();
    }
    function get_data_pustaka(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','10')->get();
        return $query->result();
    }
    function get_data_fasilitas(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','9')->get();
        return $query->result();
    }
    
}
?>