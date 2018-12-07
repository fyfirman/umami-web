<?php

class Login_model extends CI_Model{
    function check_login($username, $password){
        $data = $this->db->query("SELECT * FROM user WHERE nama_user='{$username}' AND password='{$password}'");
        if($data->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function get_random_password(){
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}

?>