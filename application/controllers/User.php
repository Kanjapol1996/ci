<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        //เมื่อเปิดหน้าใดจะทำงานอัติโนมัติโดยไม่ต้องออกคำสั่ง
    }

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
 
    public function show($userID = " ")
    {
        $user = $this->user_model->getUserByID($userID);
        $datas = array(
            'user' => $user->row()
        );
        $this->load->view('layout/header');
        $this->load->view('user/show', $datas);
        $this->load->view('layout/footer');
        //print_r ($user->row());
        //row() แสดงข้อมูลเฉพาะ
        
    }
    
    public function edit($userID)
    {
        $user = $this->user_model->getUserByID($userID);
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
        $result = $this->user_model->insertUser($data);
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
        $result = $this->user_model->update($userID, $data);
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
        $result = $this->user_model->delete($userID, $data);
        // // print_r($data);
        if($result){
             redirect('/user');
         }else{
             echo "Has error";
        }
    }

}
