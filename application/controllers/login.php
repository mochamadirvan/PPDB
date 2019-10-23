<?php

class Login extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_login');
    }
    
    
            
    function index(){
        $this->load->view('login/login');
    }
    
    function login(){
        if(isset($_POST['submit'])){
            $nip   =   $this->input->post('nip');
            $password   =   $this->input->post('password');
            $status   =   $this->input->post('status');
            $hasil      =   $this->model_login->login_guru($nip,$password,$status);


            if($hasil==1){
                if($status=='admin'){
                    
                    $this->db->where('nip',$nip);
                    $this->session->set_userdata(array('status_login'=>'oke','nip'=>$nip));
                    redirect('dashboard');
                
                }else if ($status=='guru'){
                    $this->db->where('nip',$nip);
                    $this->session->set_userdata(array('status_login'=>'oke','nip'=>$nip));
                    redirect('menu_guru');
                }
            }
            else {
                redirect('login/login');
            }
        }
        else{
            chek_session_login();
            $this->load->view('login/login');
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login/login');
    }
    
    
    
} 

