<?php

class Prestasi extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_menu_guru');
        $this->load->model('model_prestasi');
    }
    
    function index(){
        $data['record']= $this->model_prestasi->lihat();
        $this->template->load('template','prestasi/lihat',$data);
    }
    
    
    
    function tambah(){
        
        if(isset($_POST['submit'])){

            $config['upload_path'] = './assets/images/prestasi/';
            $config['allowed_types'] = 'gif|jpg|png|JPG';
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();
            
            print_r($hasil);
            
            $prestasi       =   $this->input->post('prestasi');
            $tanggal        =   $this->input->post('tanggal');
            $keterangan     =   $this->input->post('keterangan');
            $id_guru   =   $this->input->post('id_guru');
            $gambar = base_url().'assets/images/prestasi/'.$hasil['file_name'];
            echo $gambar;
            $data       = array('prestasi'=>$prestasi,
                                'keterangan'=>$keterangan,
                                'tanggal'=>$tanggal,
                                'id_guru'=>$id_guru,
                                'gambar'=>$gambar
                    );
            
            $this->model_prestasi->tambah($data);
            redirect('prestasi');
        } else {
            $nip   = $this->session->userdata('nip');
            $data['guru']= $this->model_menu_guru->guru($nip)->result();
            $this->template->load('template','prestasi/tambah',$data);
        }
//      
    }
    

    function edit(){
        
        if(isset($_POST['submit'])){
            
            if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/prestasi/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'/assets/images/prestasi/'.$hasil['file_name'];
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
            $prestasi       =   $this->input->post('prestasi');
            $tanggal        =   $this->input->post('tanggal');
            $keterangan     =   $this->input->post('keterangan');
//            $gambar = base_url().'/assets/images/'.$hasil['file_name'];
            
            
            $data       = array('prestasi'=>$prestasi,
                                'keterangan'=>$keterangan,
                                'tanggal'=>$tanggal,
                                'gambar'=>$gambar
                    );
                    print_r($data);
//            
            $this->model_prestasi->edit($data,$id);
            redirect('prestasi');
        } else {
            $id= $this->uri->segment(3);
            $nip   = $this->session->userdata('nip');
            $data['guru']= $this->model_menu_guru->guru($nip)->result();
            $data['record']= $this->model_prestasi->get_one($id)->row_array();
            $this->template->load('template','prestasi/edit',$data);
        }
//      
    }     
//    }
//    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_prestasi->hapus($id);
        redirect(prestasi);
    }
    
    
    
}