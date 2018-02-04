<?php

class User extends CI_Controller
{
    public function index()
    {
        $this->load->model('user_model');
        $users = $this->user_model->getUser();
        $data = array(
            'users' => $users
        );
        $this->load->view('layout/header');
        $this->load->view('user/users', $data);
        $this->load->view('layout/footer');
    } 
    public function adduser()
    {
        $this->load->view('layout/header');
        $this->load->view('user/adduser');
		$this->load->view('layout/footer');
    }


    // public function addUser()
    // {

        
    //     // echo "this is add User word";
    // }

    // public function sayMyName($name = "Kanjapol Sonjai", $sername = "Art")
    // {
    //     // $name = "Kanjapol Sonjai";
    //     echo "You name is ".$name.'<br>';
    //     echo "You name is ".$sername;
    // }
}
