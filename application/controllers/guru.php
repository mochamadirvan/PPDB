<?php

class Guru extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_guru');
        $this->load->model('model_kelas');
    }
    
    function index(){
        $data['record']= $this->model_guru->lihat();
        $this->template->load('template','guru/lihat',$data);
    }
    
//    
    function tambah(){
        if(isset($_POST['submit']))
        {
            
            $config['upload_path'] = './assets/images/guru/';
            $config['allowed_types'] = 'gif|jpg|png|JPG';
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();
            
            $nama          =   $this->input->post('nama');
            $nip          =   $this->input->post('nip');
            $tgl_lahir          =   $this->input->post('tgl_lahir');
            $alamat         =   $this->input->post('alamat');
            $no_telp          =   $this->input->post('no_telp');
            $agama          =   $this->input->post('agama');
            $email          =   $this->input->post('email');
            $jk          =   $this->input->post('jk');
            $password          =   $this->input->post('password');
            $status          =   $this->input->post('status');
            $id_kelas          =   $this->input->post('id_kelas');
            $gambar = base_url().'assets/images/guru/'.$hasil['file_name'];
            
            $data       = array('nama'=>$nama,
                                'nip'=>$nip,
                                'tgl_lahir'=>$tgl_lahir,
                                'alamat'=>$alamat,
                                'no_telp'=>$no_telp,
                                'agama'=>$agama,
                                'email'=>$email,
                                'jk'=>$jk,
                                'password'=>md5($password),
                                'status'=>$status,
                                'id_kelas'=>$id_kelas,
                                'foto'=>$gambar);
            $this->model_guru->tambah($data);
            redirect('guru');
        }else
        {
            $data['kelas']= $this->model_kelas->lihat()->result();
            $this->template->load('template','guru/tambah',$data);
        }
    }
//    
//    
    function edit(){
        if(isset($_POST['submit']))
        {
            
             if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/guru/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'assets/images/guru/'.$hasil['file_name'];
		else:
			$gambar = $this->input->post('gambar');
		endif;
                
            $id    =   $this->input->post('id');
            $nama          =   $this->input->post('nama');
            $nip          =   $this->input->post('nip');
            $tgl_lahir          =   $this->input->post('tgl_lahir');
            $alamat         =   $this->input->post('alamat');
            $no_telp          =   $this->input->post('no_telp');
            $agama          =   $this->input->post('agama');
            $email          =   $this->input->post('email');
            $jk          =   $this->input->post('jk');
            $password          =   $this->input->post('password');
            $status          =   $this->input->post('status');
            $id_kelas         =   $this->input->post('id_kelas');
            $data       = array('nama'=>$nama,
                                'nip'=>$nip,
                                'tgl_lahir'=>$tgl_lahir,
                                'alamat'=>$alamat,
                                'no_telp'=>$no_telp,
                                'agama'=>$agama,
                                'email'=>$email,
                                'jk'=>$jk,
                                'password'=>md5($password),
                                'status'=>$status,
                                'id_kelas'=>$id_kelas,
                                'foto'=>$gambar);
            $this->model_guru->edit($data,$id);
            redirect('guru');
        }else
        {
            $id = $this->uri->segment(3);
            $data['kelas']   =  $this->model_kelas->lihat()->result();
            $data['guru']   =  $this->model_guru->lihat()->result();
            $data['record']     =  $this->model_guru->get_one($id)->row_array();
            $this->template->load('template','guru/edit',$data);
            
        }
    }
    
    function detail(){
        $id = $this->uri->segment(3);
        //$data['kelas']   =  $this->model_kelas->lihat()->result();
        $data['guru']     =  $this->model_guru->detail($id)->row_array();
        $this->template->load('template','guru/detail_guru',$data);
    
    }
    
    

    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_guru->hapus($id);
        redirect(guru);
    }
    
    
}
