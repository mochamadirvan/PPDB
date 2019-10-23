<?php

class Kurikulum extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_kurikulum');
    }
    
    function index(){
        $data['record']= $this->model_kurikulum->lihat();
        $this->template->load('template','kurikulum/lihat',$data);
    }
    
    
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $kurikulum = $this->input->post('kurikulum');
            $materi = $this->input->post('id_materi');
            $data   = array('kurikulum'=>$kurikulum
                            );
//                        echo $id;
            $this->model_kurikulum->tambah($data);
            redirect('kurikulum');
        } 
        else {
            $id= $this->uri->segment(3);
            $data['record']= $this->model_kurikulum->get_one($id)->row_array();
            $this->template->load('template','kurikulum/tambah',$data);
        }
      
    }
//    
//    
//    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $kurikulum = $this->input->post('kurikulum');
            $materi  = $this->input->post('materi');
            $data   = array('kurikulum'=>$kurikulum
                            );
//                        echo $id;
            $this->model_kurikulum->edit($data,$id);
            redirect('kurikulum');
        } else {
            $id = $this->uri->segment(3);
            $data['record']     =  $this->model_kurikulum->get_one($id)->row_array();
            $this->template->load('template','kurikulum/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_kurikulum->hapus($id);
        redirect(kurikulum);
    }
    
    
    
}