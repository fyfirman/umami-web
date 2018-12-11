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

    function get_user_profile($id_user){
        $data = $this->db->query("SELECT nama_user,email FROM user WHERE id_user='{$id_user}'");
        return $data->row();
    }

    function get_id($username,$password){
        $password = md5($password);
        $data = $this->db->query("SELECT id_user FROM user WHERE nama_user='{$username}' AND password='{$password}'");
        return $data->row()->id_user;
    }

    //delete account
    function delete_user($id_user){
        $this->db->query("DELETE FROM user WHERE id_user='{$id_user}'");
    }
}

?>