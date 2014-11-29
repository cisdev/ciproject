<?php

   Class User extends CI_Controller
{
    
    function construct__()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->model('User_model');
        $data['users'] = $this->User_model->user_list();
        //$data = $this->User_model->user_list();
        //echo '<pre>'; print_r($users);
        $this->load->view('home/header');
        $this->load->view('subpage/users_list' , $data);
        $this->load->view('home/footer');
       
    }
}
?>