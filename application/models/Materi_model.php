<?php

class Materi_model extends CI_Model{
    function get_matkul(){
        $data = $this->db->query("SELECT * FROM matkul");
        return $data->result_array();
    }
    function get_materi_of($matkul){
        $data = $this->db->query("SELECT * FROM materi WHERE id_matkul='{$matkul}'");
        return $data->result_array();
    }
}

?>