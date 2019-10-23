<?php

class Siswa extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_siswa');
        $this->load->model('model_kelas');
        
    }
    
    function index(){
        $data['record']= $this->model_siswa->lihat();
        $this->template->load('template','siswa/lihat',$data);
    }
    
    
    function edit(){
        if(isset($_POST['submit']))
        {
            
            if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/siswa/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'assets/images/siswa/'.$hasil['file_name'];
		else:
			$gambar = $this->input->post('gambar');
		endif;
                
                print_r($gambar);
            
            $id        =   $this->input->post('id_siswa');
            $nama          =   $this->input->post('nama');
            $nisn          =   $this->input->post('nisn');
            $tgl_lahir          =   $this->input->post('tgl_lahir');
            $tempat_lahir          =   $this->input->post('tempat_lahir');
            $wali         =   $this->input->post('wali');
            $alamat         =   $this->input->post('alamat');
            $no_telp          =   $this->input->post('no_telp');
            $agama          =   $this->input->post('agama');
            $status          =   $this->input->post('status');
            $jk          =   $this->input->post('jk');
            $tahun_masuk          =   $this->input->post('tahun_masuk');
            $id_kelas          =   $this->input->post('id_kelas');
           
            
            $data       = array('nama'=>$nama,
                                'nisn'=>$nisn,
                                'wali'=>$wali,
                                'tgl_lahir'=>$tgl_lahir,
                                'tempat_lahir'=>$tempat_lahir,
                                'alamat'=>$alamat,
                                'no_telp'=>$no_telp,
                                'agama'=>$agama,
                                'status'=>$status,
                                'tahun_masuk'=>$tahun_masuk,
                                'jk'=>$jk,
                                'id_kelas'=>$id_kelas,
                                'foto'=>$gambar);
            $this->model_siswa->edit($data,$id);
            redirect('siswa');
        }else
        {
            $id = $this->uri->segment(3);
            $data['kelas']   =  $this->model_kelas->lihat()->result();
            $data['record']     =  $this->model_siswa->get_one($id)->row_array();
            $this->template->load('template','siswa/edit',$data);
        }
    }
//    
////    
    function tambah(){
        if(isset($_POST['submit']))
        {
            
            $config['upload_path'] = './assets/images/siswa/';
            $config['allowed_types'] = 'gif|jpg|png|JPG';
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();
            
            $nama          =   $this->input->post('nama');
            $nisn          =   $this->input->post('nisn');
            $tgl_lahir          =   $this->input->post('tgl_lahir');
            $tempat_lahir          =   $this->input->post('tempat_lahir');
            $wali         =   $this->input->post('wali');
            $alamat         =   $this->input->post('alamat');
            $no_telp          =   $this->input->post('no_telp');
            $agama          =   $this->input->post('agama');
            $status          =   $this->input->post('status');
            $jk          =   $this->input->post('jk');
            $tahun_masuk          =   $this->input->post('tahun_masuk');
            $id_kelas         =   $this->input->post('id_kelas');
            $gambar = base_url().'assets/images/siswa/'.$hasil['file_name'];
            
            print_r($gambar);
            $data       = array('nama'=>$nama,
                                'nisn'=>$nisn,
                                'wali'=>$wali,
                                'tgl_lahir'=>$tgl_lahir,
                                'tempat_lahir'=>$tempat_lahir,
                                'alamat'=>$alamat,
                                'no_telp'=>$no_telp,
                                'agama'=>$agama,
                                'status'=>$status,
                                'tahun_masuk'=>$tahun_masuk,
                                'jk'=>$jk,
                                'id_kelas'=>$id_kelas,
                                'foto'=>$gambar);
            $this->model_siswa->tambah($data);
            redirect('siswa');
        }else
        {
            $data['kelas']= $this->model_kelas->lihat()->result();
            $this->template->load('template','siswa/tambah',$data);
        }
    }
    
    
    function detail(){
        $id = $this->uri->segment(3);
        //$data['kelas']   =  $this->model_kelas->lihat()->result();
        $data['siswa']     =  $this->model_siswa->detail($id)->row_array();
        $this->template->load('template','siswa/detail',$data);
    
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_siswa->hapus($id);
        redirect(siswa);
    }
    
    function hapus2(){
       $id= $this->uri->segment(3);
        $this->model_siswa->hapus2($id);
        redirect(siswa);
    }
    
    function daftar(){
        $data['record']= $this->model_siswa->daftar();
        $this->template->load('template','siswa/daftar',$data);
    }
    
    function proses(){
        if(isset($_POST['submit']))
        {
            
            if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/siswa/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'assets/images/siswa/'.$hasil['file_name'];
		else:
			$gambar = $this->input->post('gambar');
		endif;
                
                print_r($gambar);
            
            $id        =   $this->input->post('id_siswa');
            $nama          =   $this->input->post('nama');
            $nisn          =   $this->input->post('nisn');
            $tgl_lahir          =   $this->input->post('tgl_lahir');
            $tempat_lahir          =   $this->input->post('tempat_lahir');
            $wali         =   $this->input->post('wali');
            $alamat         =   $this->input->post('alamat');
            $no_telp          =   $this->input->post('no_telp');
            $agama          =   $this->input->post('agama');
            $status          =   $this->input->post('status');
            $jk          =   $this->input->post('jk');
            $tahun_masuk          =   $this->input->post('tahun_masuk');
            $id_kelas          =   $this->input->post('id_kelas');
            
            $data       = array('nama'=>$nama,
                                'nisn'=>$nisn,
                                'wali'=>$wali,
                                'tgl_lahir'=>$tgl_lahir,
                                'tempat_lahir'=>$tempat_lahir,
                                'alamat'=>$alamat,
                                'no_telp'=>$no_telp,
                                'agama'=>$agama,
                                'status'=>$status,
                                'tahun_masuk'=>$tahun_masuk,
                                'jk'=>$jk,
                                'id_kelas'=>$id_kelas,
                                'foto'=>$gambar);
            $this->model_siswa->tambah($data,$id);
            redirect('siswa');
        }else
        {
            $id = $this->uri->segment(3);
            $data['kelas']   =  $this->model_kelas->lihat()->result();
            $data['record']     =  $this->model_siswa->get_one2($id)->row_array();
            $this->template->load('template','siswa/proses',$data);
        }
    }
    
    
}
