<?php

class Slide extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_slide');
    }
    
    function index(){
        $data['record']= $this->model_slide->lihat();
        $this->template->load('template','slide/lihat',$data);
    }
    
    function edit(){
        
        if(isset($_POST['submit'])){
            
            if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/slide/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'/assets/images/slide/'.$hasil['file_name'];
		else:
			$gambar = $this->input->post('gambar');
		endif;
//            
//                echo $gambar;
//            
//            $this->upload->do_upload('foto');
//            $hasil=$this->upload->data();
//            
//            print_r($hasil);
            $id              =   $this->input->post('id');

            
            
            $data       = array(
                                'gambar'=>$gambar
                    );
//                    print_r($data);
//            
            $this->model_slide->edit($data,$id);
            redirect('slide');
        } else {
            $id= $this->uri->segment(3);
            $data['record']= $this->model_slide->get_one($id)->row_array();
            $this->template->load('template','slide/edit',$data);
        }
//      
    }     

    
    
    
}