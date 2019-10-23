<?php

class Profile extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_profile');
    }
    
    function index(){
        $data['record']= $this->model_profile->lihat();
        $this->template->load('template','profile/lihat',$data);
    }
    
    function edit(){
        
         if(isset($_POST['submit'])){
            
            if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/profile/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'assets/images/profile/'.$hasil['file_name'];
                else:
			$gambar = $this->input->post('gambar');
		endif;
//            

                print_r($gambar);
             
            $id              =   $this->input->post('id');
            $visi     =   $this->input->post('visi');
            $misi     =   $this->input->post('misi');
            $profile     =   $this->input->post('profile');
//            $gambar = base_url().'assets/images/kegiatan/'.$hasil['file_name'];
            //$gambar = base_url().'/assets/images/'.$hasil['file_name'];
            
            //echo $keterangan;
            
//            
            $data       = array('visi'=>$visi,
                                'misi'=>$misi,
                                'profile'=>$profile,
                                'gambar'=>$gambar
                    );
                    
            $this->model_profile->edit($data,$id);
            redirect('profile');
        } else {
            $id= $this->uri->segment(3);
            $data['record']= $this->model_profile->get_one($id)->row_array();
            $this->template->load('template','profile/edit',$data);
        }
//      
    } 
    
    
    
}