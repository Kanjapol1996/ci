<?php

class User extends CI_Controller
{
    public function index()
    {
        echo "Hello World";
    }

    public function addUser()
    {
        $this->load->view("adduser");
        // echo "this is add User word";
    }

    // public function sayMyName($name = "Kanjapol Sonjai", $sername = "Art")
    // {
    //     // $name = "Kanjapol Sonjai";
    //     echo "You name is ".$name.'<br>';
    //     echo "You name is ".$sername;
    // }
}
