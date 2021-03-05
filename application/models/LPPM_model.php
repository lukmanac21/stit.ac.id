<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LPPM_model extends CI_MODEL{
    function get_data_jurnal(){
        $query = $this->db->select('*')->from('jurnal')->join('kategori_jurnal','jurnal.kategori_id = kategori_jurnal.id')->get();
        return $query->result();
    }
    function get_file_download($params = array()){
        $this->db->select('*');
        $this->db->from('jurnal');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }
    function get_data_penelitian(){
        $query = $this->db->select('*')->from('penelitian')->order_by('id','DESC')->get();
        return $query->result();
    }
    function get_detail_penelitian($id){
        $query = $this->db->select('*')->from('penelitian')->where('id =',$id)->get();
        return $query->result();
    }
    function get_data_kategori_penelitian(){
        $query = $this->db->select('*')->from('kategori_jurnal')->get();
        return $query->result();
    }
    function get_data_pengabdian(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','5')->get();
        return $query->result();
    }
    function get_data_detail($id){
        $query = $this->db->select('*')->from('berita')->where('id_berita =',$id)->get();
        return $query->result();
    }
    function get_data_kolom(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','8')->get();
        return $query->result();
    }
    function get_data_kategori(){
        $query = $this->db->select('*')->from('kategori')->get();
        return $query->result();
    }
    function get_data_kajian(){
        $query = $this->db->select('*')->from('berita')->join('detail_kat_berita','berita.id_berita = detail_kat_berita.id_berita')->where('detail_kat_berita.id_kategori =','11')->get();
        return $query->result();
    }
}

?>