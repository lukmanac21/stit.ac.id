<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik_model extends CI_MODEL{

    function get_data_informasi(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','2')->get();
        return $query->result();
    }
    function get_data_pstudi(){
        $query = $this->db->select('*')->from('pstudi')->get();
        return $query->result();
    }
    function get_data_pesantren(){
        $query = $this->db->select('*')->from('pesantren')->get();
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
}
?>