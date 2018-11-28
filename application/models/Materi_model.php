<?php

class Materi_model extends CI_Model{
    function get_matkul(){
        $data = $this->db->query("SELECT * FROM matkul");
        return $data->result_array();
    }
}

?>