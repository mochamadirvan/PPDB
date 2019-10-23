<?php

class Psb extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_psb');
    }
    
    function index(){
        $data['record']= $this->model_psb->lihat();
        $this->template->load('template','psb/lihat',$data);
    }
    
    function edit(){
        
        if(isset($_POST['submit'])){
            
            if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/psb/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'assets/images/psb/'.$hasil['file_name'];
                else:
			$gambar = $this->input->post('gambar');
		endif;
//            

                print_r($gambar);
             
            $id              =   $this->input->post('id');
            $keterangan     =   $this->input->post('keterangan');
            $persyaratan     =   $this->input->post('persyaratan');
            $tanggal     =   $this->input->post('tanggal');
//            $gambar = base_url().'assets/images/kegiatan/'.$hasil['file_name'];
            //$gambar = base_url().'/assets/images/'.$hasil['file_name'];
            
            //echo $keterangan;
            
//            
            $data       = array('keterangan'=>$keterangan,
                                'persyaratan'=>$persyaratan,
                                'tanggal'=>$tanggal,
                                'gambar'=>$gambar
                    );
                    
            $this->model_psb->edit($data,$id);
            redirect('psb');
        } else {
            $id= $this->uri->segment(3);
            $data['record']= $this->model_psb->get_one($id)->row_array();
            $this->template->load('template','psb/edit',$data);
        }
//      
    }     
//    }
    
    
    
}