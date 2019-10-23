<?php

class Kelas extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_kelas');
    }
    
    function index(){
        $data['record']= $this->model_kelas->lihat();
        $this->template->load('template','kelas/lihat',$data);
    }
    
    
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $kelas  = $this->input->post('kelas');
            $data   = array('kelas'=>$kelas);
//                        echo $id;
            $this->model_kelas->tambah($data,$id);
            redirect('kelas');
        } else {
            $this->template->load('template','kelas/tambah');
        }
      
    }
    
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $kelas  = $this->input->post('kelas');
            $data   = array('kelas'=>$kelas);
//                        echo $id;
            $this->model_kelas->edit($data,$id);
            redirect('kelas');
        } else {
            $id = $this->uri->segment(3);
            $data['record']     =  $this->model_kelas->get_one($id)->row_array();
            $this->template->load('template','kelas/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_kelas->hapus($id);
        redirect(kelas);
    }
    
    
    
}