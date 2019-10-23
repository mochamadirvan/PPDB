<?php

class Contact extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_contact');
    }
    
    function index(){
        $data['record']= $this->model_contact->lihat();
        $this->template->load('template','contact/lihat',$data);
    }
    

    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_contact->hapus($id);
        redirect(berita);
    }
    
    
    
}