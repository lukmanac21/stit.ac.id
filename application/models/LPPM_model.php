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
    }
?>