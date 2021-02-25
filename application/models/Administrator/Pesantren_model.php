<?php
    class Pesantren_model extends CI_MODEL{
        function get_data_pesantren(){
            $query = $this->db->select('*')->from('pesantren')->get();
            return $query->result();
        }
        function get_edit_data($id){
            $query = $this->db->select('*')->from('pesantren')->where('id',$id)->get();
            return $query->result();
        }
        function get_data_pesantren_edit($id){
            $query = $this->db->select('*')->from('pesantren')->where('id',$id)->get();
            return $query->result();
        }
        function insert_data($data){
            $this->db->insert('pesantren',$data);
        }
        function update_data($data,$where){
            $this->db->where($where);
            $this->db->update('pesantren', $data);
        }
        function delete_data($where){
            $this->db->where($where);
            $this->db->delete('pesantren');
        }
    }
?>