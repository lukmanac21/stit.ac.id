<?php
    class Kolommhs_model extends CI_MODEL{
        function get_data_kolommhs(){
            $query = $this->db->select('*')->from('kolommhs')->get();
            return $query->result();
        }
        function get_edit_data($id){
            $query = $this->db->select('*')->from('kolommhs')->where('id',$id)->get();
            return $query->result();
        }
        function get_data_kolommhs_edit($id){
            $query = $this->db->select('*')->from('kolommhs')->where('id',$id)->get();
            return $query->result();
        }
        function insert_data($data){
            $this->db->insert('kolommhs',$data);
        }
        function update_data($data,$where){
            $this->db->where($where);
            $this->db->update('kolommhs', $data);
        }
        function delete_data($where){
            $this->db->where($where);
            $this->db->delete('kolommhs');
        }
    }
?>