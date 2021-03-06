<?php

class User_model extends CI_Model {

   public function getUser(){
       $query = "SELECT * FROM users INNER JOIN user_types ON users.user_type_id = user_types.user_type_id";
       $users = $this->db->query($query);
       return $users;
       //แสดงข้อมูลทั้งหมด
   }

   public function getUserByID($userID)
   {
        $query = "SELECT * FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);
        
   
    }

   public function insertUser($data)
   {
       $username = $data['username'];
       $password = $data['password'];
       $user_type_id = $data['user_type_id'];
       $name = $data['fullname'];
       $email = $data['email'];
       $age = $data['age'];
       $query = "INSERT INTO users (username,password,user_type_id,fullname,email,age) VALUES('$username','$password','$user_type_id','$name', '$email', '$age')";
       return $this->db->query($query);
   }

   public function update($userID, $data)
   {
        $username = $data['username'];
        $password = $data['password'];
       $fullname = $data['fullname'];
       $user_type_id = $data['user_type_id'];
       $email = $data['email'];
       $age = $data['age'];
       $query = "UPDATE users SET username = '$username',password = '$password', user_type_id = 
       '$user_type_id', fullname = '$fullname', email = '$email', age = '$age' WHERE user_id = '$userID'";
       return $this->db->query($query);
   }

   public function delete($userID, $data)
   {
    //    $fullname = $data['fullname'];
    //    $email = $data['email'];
    //    $age = $data['age'];
       $query = "DELETE FROM users WHERE user_id = '$userID'";
       return $this->db->query($query);
   }

   //Auth
   public function checkLogin($username, $password)
   {
       $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
       return $this->db->query($query);
   }
}
