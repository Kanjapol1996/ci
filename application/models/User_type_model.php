<?php

class User_type_model extends CI_Model
{
    public function getUsertype()
    {
        $query = "SELECT * FROM user_types";
        return $this->db->query($query);       
        //แสดงข้อมูลทั้งหมด
    }
}