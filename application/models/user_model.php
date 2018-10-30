<?php

class User_model extends CI_Model{
    function get_data(){
        return $this->db->get('user');
    }
}

?>