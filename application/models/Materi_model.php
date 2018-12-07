<?php

class Materi_model extends CI_Model{
    //Return list of all matkul
    function get_matkul(){
        $data = $this->db->query("SELECT * FROM matkul");
        return $data->result_array();
    }

    //Return materi of matkul 
    function get_materi_of($matkul){
        $data = $this->db->query("SELECT * FROM materi WHERE id_matkul='{$matkul}'");
        return $data->result_array();
    }

    //Return one data materi
    function get_materi_by_id($id_materi){
        $data = $this->db->query("SELECT * FROM materi WHERE id_materi='{$id_materi}'");
        return $data->row();
    }

    function get_nama_matkul_and_dosen_of($id_matkul){
        $query = "SELECT matkul.Nama_Matkul, dosen.Nama_Dosen FROM matkul,dosen WHERE matkul.id_dosen=dosen.id_dosen AND id_matkul='{$id_matkul}'";
        $data = $this->db->query($query);
        return $data->row();
        
    }
}

?>