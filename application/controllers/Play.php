<?php
class Play extends CI_Controller
{
    public function index()
    {
        $this->load->model('user_model');
        $user = $this->user_model->getUser();
        print_r($user->result());
    }


}
