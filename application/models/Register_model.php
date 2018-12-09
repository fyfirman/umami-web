<?php
// menyiapkan query
class Register_model extends CI_Model{
    function register($data){
        // var_dump($data);
        $username = $data['username'];
        $password = $data['password'];
        $email = $data['email'];
        
        $query = $this->db->query("INSERT INTO user(nama_user,password,email) VALUES ('$username','$password','$email')");
        
        return $query;
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