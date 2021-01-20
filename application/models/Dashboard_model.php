<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_MODEL{

    function check_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function get_login_data($table, $where)
    {
        $query = $this->db->get_where($table, $where);
        return $query->row_array();
    }

}
?>