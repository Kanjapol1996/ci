<?php
class Play extends CI_Controller
{
    public function index()
    {
        $db = $this->db->get('user_type');
        print_r($db->result());
    }
    public function users()
    {
        $db = $this->db->get('users');
        print_r($db->result())."<br>";
    }

}
