<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('User_type_model');
        //เมื่อเปิดหน้าใดจะทำงานอัติโนมัติโดยไม่ต้องออกคำสั่ง
    }

    public function index()
    {
        $this->load->model('User_model');
        $users = $this->User_model->getUser();
        $data = array(
            'users' => $users
        );
        $this->load->view('layout/header');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }

    public function adduser()
    {
        $user_types = $this->User_type_model->getUsertype();
        $data = [
            'user_types' => $user_types
        ];
        $this->load->view('layout/header');
        $this->load->view('user/adduser', $data);
        $this->load->view('layout/footer');
    
    }
 
    public function show($userID = " ")
    {
        $user = $this->User_model->getUserByID($userID);
        $datas = array(
            'user' => $user->row()
        );
        $this->load->view('layout/header');
        $this->load->view('user/show', $datas);
        $this->load->view('layout/footer');
        //print_r ($user->row());
        //row() แสดงข้อมูลเฉพาะ
        
    }

    public function profile()
    {
        echo "You are now login";
        // $this->load->view('layout/header');
        // $this->load->view('user/show', $datas);
        // $this->load->view('layout/footer');      
    }

    public function edit($userID)
    {
        $user = $this->User_model->getUserByID($userID);
        $data = array(
            'user' => $user->row()
        );
        $this->load->view('layout/header');
        $this->load->view('user/edit', $data);
        $this->load->view('layout/footer');
    }
    
    public function create()
    {
        $data = $this->input->post();
        $result = $this->User_model->insertUser($data);
        // print_r($data);
        if($result){
            redirect('/user');
        }else{
            echo "Has error";
        }
    }

    public function update($userID)
    {
        $data = $this->input->post();
        $result = $this->User_model->update($userID, $data);
        // // print_r($data);
        if($result){
             redirect('/user');
         }else{
             echo "Has error";
        }
    }

    public function delete($userID)
    {
        $data = $this->input->post();
        $result = $this->User_model->delete($userID, $data);
        // // print_r($data);
        if($result){
             redirect('/user');
         }else{
             echo "Has error";
        }
    }
}
