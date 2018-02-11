<?php
class Play extends CI_Controller
{
    public function index()
    {
        $this->load->model('User_model');
        $user = $this->User_model->getUser();
        print_r($user->result());
    }


}
