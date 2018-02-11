<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        //เมื่อเปิดหน้าใดจะทำงานอัติโนมัติโดยไม่ต้องออกคำสั่ง
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->User_model->checkLogin($username, $password);
        if($result->num_rows() > 0){
            $user = $result->row();
            $data = [
                'user_id' => $user->user_id,
                'username' => $user->username,
                'user_type_id'=> $user->user_type_id,
                'fullname' => $user->fullname,
                'email' => $user->email,
                'age' => $user->age,
            ];
            $this->session->set_userdata($data);
            redirect('/user/profile');
        }else{
            redirect('/');
       }
    }

    public function logout()
    {
            $this->session->sess_destroy();
            redirect('/');
    }



}