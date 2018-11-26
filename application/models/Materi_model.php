<?php

class Materi_model extends CI_Model{
    function get_matkul_of_semester(){
        $data = $this->db->query("SELECT * FROM matkul WHERE semester = '1'");
        return $data->result_array();
    }
}

?>