<?php

class Menu_guru extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_menu_guru');
        $this->load->model('model_prestasi');
        $this->load->model('model_kegiatan');
        $this->load->model('model_kelas');
        $this->load->model('model_guru');
        $this->load->model('model_siswa');
        
        
    }
    
    function index(){
        $nip   = $this->session->userdata('nip');
        $data = array(
			'tot_all_siswa' => $this->model_menu_guru->get_all_siswa()->num_rows(),
                        'tot_siswa_kelas' => $this->model_menu_guru->get_siswa_kelas($nip)->num_rows(),
                        'tot_kegiatan' => $this->model_menu_guru->get_kegiatan()->num_rows(),
                        'tot_prestasi' => $this->model_menu_guru->get_prestasi()->num_rows(),
            );
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $this->template->load('template2','menu_guru/dashboard',$data);
    }
    
    function profile(){
        $nip   = $this->session->userdata('nip');
        $data['guru']= $this->model_menu_guru->get_profile($nip)->row_array();
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $this->template->load('template2','menu_guru/lihat_profile',$data);
    }
    
    function detail_profile(){
        $nip   = $this->session->userdata('nip');
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $data['guru']= $this->model_menu_guru->get_profile($nip)->row_array();
        $this->template->load('template2','menu_guru/detail_guru',$data);
    }
    
    
    function edit_guru(){
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
            $id_kelas         =   $this->input->post('kelas');
            $data       = array('nama'=>$nama,
                                'nip'=>$nip,
                                'tgl_lahir'=>$tgl_lahir,
                                'alamat'=>$alamat,
                                'no_telp'=>$no_telp,
                                'agama'=>$agama,
                                'email'=>$email,
                                'jk'=>$jk,
                                'password'=>md5($password),
                                'id_kelas'=>$id_kelas,
                                'foto'=>$gambar);
            $this->model_guru->edit($data,$id);
            redirect('menu_guru/profile');
        }else
        {
            $id = $this->uri->segment(3);
            $nip   = $this->session->userdata('nip');
            $data['kelas']   =  $this->model_kelas->lihat()->result();
            $data['guru']   =  $this->model_guru->lihat()->result();
            $data['user']= $this->model_menu_guru->guru($nip)->row_array();
            $data['record']     =  $this->model_guru->get_one($id)->row_array();
            $this->template->load('template2','menu_guru/edit_profile',$data);
            
        }
    }
    
    function prestasi(){
        $nip   = $this->session->userdata('nip');
        $data['record']= $this->model_prestasi->lihat();
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $this->template->load('template2','menu_guru/lihat_prestasi',$data);
    }
    
    function tambah_prestasi(){
        
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
            $id_guru     =   $this->input->post('id_guru');
            $gambar = base_url().'assets/images/prestasi/'.$hasil['file_name'];
            echo $gambar;
            $data       = array('prestasi'=>$prestasi,
                                'keterangan'=>$keterangan,
                                'tanggal'=>$tanggal,
                                'id_guru'=>$id_guru,
                                'gambar'=>$gambar
                    );
            
            $this->model_prestasi->tambah($data);
            redirect('menu_guru/prestasi');
        } else {
            $nip   = $this->session->userdata('nip');
            $data['guru']= $this->model_menu_guru->guru($nip)->result();
            $data['user']= $this->model_menu_guru->guru($nip)->row_array();
            $this->template->load('template2','menu_guru/tambah_prestasi',$data);
        }
//      
    }
    

    function edit_prestasi(){
        
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
            redirect('menu_guru/prestasi');
        } else {
            $id= $this->uri->segment(3);
            $nip   = $this->session->userdata('nip');
            $data['record']= $this->model_prestasi->get_one($id)->row_array();
            $data['guru']= $this->model_menu_guru->guru($nip)->result();
            $data['user']= $this->model_menu_guru->guru($nip)->row_array();
            $this->template->load('template2','menu_guru/edit_prestasi',$data);
        }
//      
    }     
//    }
//    
    function hapus_prestasi(){
       $id= $this->uri->segment(3);
        $this->model_prestasi->hapus($id);
        redirect('menu_guru/prestasi');
    }
    
    
    
    
    function kegiatan(){
        $nip   = $this->session->userdata('nip');
        $data['record']= $this->model_kegiatan->lihat();
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $this->template->load('template2','menu_guru/lihat_kegiatan',$data);
    }
    
    
    
    function tambah_kegiatan(){
        
        if(isset($_POST['submit'])){

            $config['upload_path'] = './assets/images/kegiatan/';
            $config['allowed_types'] = 'gif|jpg|png|JPG';
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();
            
            
            $kegiatan       =   $this->input->post('kegiatan');
            $tanggal_mulai  =   $this->input->post('tanggal_mulai');
            $tanggal_selesai=   $this->input->post('tanggal_selesai');
            $tempat         =   $this->input->post('tempat');
            $keterangan     =   $this->input->post('keterangan');
            $id_guru        =   $this->input->post('id_guru');
            $gambar = base_url().'assets/images/kegiatan/'.$hasil['file_name'];
            echo $gambar;
            $data       = array('kegiatan'=>$kegiatan,
                                'tgl_mulai'=>$tanggal_mulai,
                                'tgl_selesai'=>$tanggal_selesai,
                                'tempat'=>$tempat,
                                'keterangan'=>$keterangan,
                                'id_guru'=>$id_guru,
                                'gambar'=>$gambar
                    );
            
            $this->model_kegiatan ->tambah($data);
            redirect('menu_guru/kegiatan');
        } else {
            $nip   = $this->session->userdata('nip');
            $data['guru']= $this->model_menu_guru->guru($nip)->result();
            $data['user']= $this->model_menu_guru->guru($nip)->row_array();
            $this->template->load('template2','menu_guru/tambah_kegiatan',$data);
        }
//      
    }
//    

    function edit_kegiatan(){
        
        if(isset($_POST['submit'])){
            
            if($_FILES['foto']['error'] == 0):
			$config = array(
				'upload_path' => './assets/images/kegiatan/',
				'allowed_types' => 'gif|jpg|JPG|png',
				);
		$this->load->library('upload', $config);      
		$this->upload->do_upload('foto');
		$hasil = $this->upload->data();
		$gambar = base_url().'assets/images/kegiatan/'.$hasil['file_name'];
                else:
			$gambar = $this->input->post('gambar');
		endif;
//            

            $id              =   $this->input->post('id');
            $kegiatan       =   $this->input->post('kegiatan');
            $tanggal_mulai  =   $this->input->post('tanggal_mulai');
            $tanggal_selesai=   $this->input->post('tanggal_selesai');
            $tempat         =   $this->input->post('tempat');
            $keterangan     =   $this->input->post('keterangan');
//            $gambar = base_url().'assets/images/kegiatan/'.$hasil['file_name'];
            //$gambar = base_url().'/assets/images/'.$hasil['file_name'];
            
            echo $keterangan;
            
//            
            $data       = array('kegiatan'=>$kegiatan,
                                'tgl_mulai'=>$tanggal_mulai,
                                'tgl_selesai'=>$tanggal_selesai,
                                'tempat'=>$tempat,
                                'keterangan'=>$keterangan,
                                'gambar'=>$gambar
                    );
                    
            $this->model_kegiatan->edit($data,$id);
            redirect('menu_guru/kegiatan');
        } else {
            $id= $this->uri->segment(3);
            $nip   = $this->session->userdata('nip');
            $data['record']= $this->model_kegiatan->get_one($id)->row_array();
            $data['guru']= $this->model_menu_guru->guru($nip)->result();
            $data['user']= $this->model_menu_guru->guru($nip)->row_array();
            $this->template->load('template2','menu_guru/edit_kegiatan',$data);
        }
//      
    }     
//    }
//////    
    function hapus_kegiatan(){
       $id= $this->uri->segment(3);
        $this->model_kegiatan->hapus($id);
        redirect('menu_guru/kegiatan');
    }
    
    function siswa(){
        $nip   = $this->session->userdata('nip');
        $data['record']= $this->model_menu_guru->get_siswa($nip);
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $this->template->load('template2','menu_guru/lihat_siswa',$data);
    }
    
    function detail_siswa(){
        $id= $this->uri->segment(3);
        $nip   = $this->session->userdata('nip');
        $data['siswa']= $this->model_menu_guru->detail_siswa($id)->row_array();
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $this->template->load('template2','menu_guru/detail_siswa',$data);
    }
    
    function tambah_siswa(){
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
            redirect('menu_guru/siswa');
        }else
        {
            $nip   = $this->session->userdata('nip');
            $data['user']= $this->model_menu_guru->guru($nip)->row_array();
            $data['kelas']= $this->model_kelas->lihat()->result();
            $this->template->load('template2','menu_guru/tambah_siswa',$data);
        }
    }
    
    function edit_siswa(){
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
            redirect('menu_guru/siswa');
        }else
        {
            $id = $this->uri->segment(3);
            $nisn   = $this->session->userdata('nisn');
            $data['kelas']   =  $this->model_kelas->lihat()->result();
            $data['siswa']   =  $this->model_siswa->lihat()->result();
            $data['user']= $this->model_menu_guru->siswa($nisn)->row_array();
            $data['record']     =  $this->model_siswa->get_one($id)->row_array();
            $this->template->load('template2','menu_guru/edit_siswa',$data);
   
        }
    }
    
    function dashboard()
    {
        $nip   = $this->session->userdata('nip');
        $data = array(
			'tot_all_siswa' => $this->model_menu_guru->get_all_siswa()->num_rows(),
                        'tot_siswa_kelas' => $this->model_menu_guru->get_siswa_kelas($nip)->num_rows(),
                        'tot_kegiatan' => $this->model_menu_guru->get_kegiatan()->num_rows(),
                        'tot_prestasi' => $this->model_menu_guru->get_prestasi()->num_rows(),
            );
        
        $data['user']= $this->model_menu_guru->guru($nip)->row_array();
        $this->template->load('template2','menu_guru/dashboard',$data);
    }

    
    
  
    
    
}
