<?php

class User_model extends CI_Model{
    function register($data){
        // var_dump($data);
        $username = $data['username'];
        $password = md5($data['password']);
        $email = $data['email'];
        
        $query = $this->db->query("INSERT INTO user(nama_user,password,email) VALUES ('$username','$password','$email')");
        
        return $query;
    }
    
    function check_login($username, $password){
        $password = md5($password);
        $data = $this->db->query("SELECT * FROM user WHERE nama_user='{$username}' AND password='{$password}'");
        if($data->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function check_forgot($username, $email){
        $data = $this->db->query("SELECT * FROM user WHERE nama_user='{$username}' AND email='{$email}'");
        if($data->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function update_password($username,$password){
        $this->db->query("UPDATE user SET password='{$password}' WHERE nama_user='{$username}'");
    }
}

?>