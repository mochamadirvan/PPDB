<?php

class Status extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_dashboard');
        $this->load->model('model_siswa');
        $this->load->model('model_guru');
        $this->load->model('model_kelas');
        $this->load->model('model_pegawai');
        
        
    }
    
    function index(){
        $data = array(
			'tot_all_pegawai' => $this->model_pegawai->lihat()->num_rows(),
                        'tot_all_siswa' => $this->model_siswa->lihat()->num_rows(),
                        'tot_daftartk' => $this->model_siswa->s_daftartk()->num_rows(),
//                        'tot_daftartitipan' => $this->model_anak->s_daftaranak()->num_rows(),
            );
       $this->template->load('template3','status/dashboard',$data);
    }
    
    function siswa(){
        $data['record']= $this->model_siswa->lihat();
        $this->template->load('template3','status/siswa',$data);
    }
    
    function pegawai(){
        $data['record']= $this->model_pegawai->lihat();
        $this->template->load('template3','status/pegawai',$data);
    }
    
    function detail_siswa(){
        $id = $this->uri->segment(3);
        //$data['kelas']   =  $this->model_kelas->lihat()->result();
        $data['siswa']     =  $this->model_siswa->detail($id)->row_array();
        $this->template->load('template3','status/detail_siswa',$data);
    
    }
    
    function detail_pegawai(){
        $id = $this->uri->segment(3);
        //$data['kelas']   =  $this->model_kelas->lihat()->result();
        $data['pegawai']     =  $this->model_pegawai->detail($id)->row_array();
        $this->template->load('template3','status/detail_pegawai',$data);
    
    }
//    function pendaftar_penitipan(){
//        $data['record']= $this->model_anak->s_daftaranak();
//        $this->template->load('template3','status/daftarpenitipan',$data);
//    }
//    
//    function pendaftar_tk(){
//        $data['record']= $this->model_siswa->s_daftartk();
//        $this->template->load('template3','status/daftartk',$data);
//    }
    

    
}
