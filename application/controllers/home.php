<?php

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_home');
        $this->load->library('pagination');
        
    }
    
    function index(){
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['slide']= $this->model_home->slide();
        $data['record']= $this->model_home->guru();
        $this->load->view('home/header');
        $this->load->view('home/home',$data);
        $this->load->view('home/footer');
    }
    
    function profile(){
        $data['berita']= $this->model_home->lihat_berita();
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['profile']= $this->model_home->profile();
        $data['p']= $this->model_home->profile()->row_array();
        $this->load->view('home/header');
        $this->load->view('home/profile',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    function psb(){
        $data['berita']= $this->model_home->lihat_berita();
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['psb']= $this->model_home->psb();
        $data['p']= $this->model_home->profile()->row_array();
        $this->load->view('home/header');
        $this->load->view('home/psb',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }


    function pembayaran(){
        $data['p']= $this->model_home->profile()->row_array();
        $this->load->view('home/header');
        $this->load->view('home/pembayaran', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    function tk_daftar(){
        if(isset($_POST['submit']))
        {
              if($_FILES['dokumen']['error'] == 0):
            $config = array(
                'upload_path' => './assets/file/',
                'allowed_types' => 'doc|docx|JPG|pdf',
                );
        $this->load->library('upload', $config);      
        $this->upload->do_upload('dokumen');
        $hasil = $this->upload->data();
        $dokumen = base_url().'assets/file/'.$hasil['file_name'];
        else:
            $dokumen = $this->input->post('dokumen');
        endif;

         print_r($dokumen);

            $nama           =   $this->input->post('nama');
            $nisn           =   $this->input->post('nisn');
            $tgl_lahir      =   $this->input->post('tgl_lahir');
            $tempat_lahir   =   $this->input->post('tempat_lahir');
            $wali           =   $this->input->post('wali');
            $alamat         =   $this->input->post('alamat');
            $no_telp        =   $this->input->post('no_telp');
            $alamat_wali    =   $this->input->post('alamat_wali');
            $asal_sekolah   =   $this->input->post('asal_sekolah');
            $agama          =   $this->input->post('agama');
            $jk             =   $this->input->post('jk');
            $jurusan        =   $this->input->post('jurusan');
            // $dokumen        =   $this->upload->data('dokumen');
               
            
            $data       = array('nama'=>$nama, 
                                'nisn' => $nisn,
                                'wali'=>$wali,
                                'tgl_lahir'=>$tgl_lahir,
                                'tempat_lahir'=>$tempat_lahir,
                                'alamat'=>$alamat,
                                'alamat_wali'=>$alamat_wali,
                                'asal_sekolah'=>$asal_sekolah,
                                'no_telp'=>$no_telp,
                                'agama'=>$agama,
                                'jk'=>$jk,
                                'jurusan'=>$jurusan,
                                'dokumen' => $dokumen);
                          // print_r($data);
            $this->model_home->daftartk($data);
            redirect('home');
        }else
        {
            $data['p']= $this->model_home->profile()->row_array();
            $this->load->view('home/header');
            $this->load->view('home/daftartk');
            $this->load->view('home/footer',$data);
            
        }
    }
    
   
    
    function login(){
        $this->load->view('home/login');
    }
    
    function contact(){
        if(isset($_POST['submit']))
        {
            
            $nama           =   $this->input->post('nama');
            $email     =   $this->input->post('email');
            $no_telp   =   $this->input->post('no_telp');
            $pesan           =   $this->input->post('pesan');
            
            
            $data       = array('nama'=>$nama,
                                'email'=>$email,
                                'no_telp'=>$no_telp,
                                'pesan'=>$pesan);

            $this->model_home->contact($data);
            redirect('home');
        }else
        {
            $data['p']= $this->model_home->profile()->row_array();
            $this->load->view('home/header');
            $this->load->view('home/contact');
            $this->load->view('home/footer',$data);
        }
    }
    
    function berita(){
        $config['base_url'] = base_url('home/berita/hal/');
        $config['total_rows'] = $this->model_home->total_rows('berita');
	$config['per_page'] = 5;

        /* config pagging */
	$config['full_tag_open'] = '<div class="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['first_url'] = '';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


	$this->pagination->initialize($config);		

	$limit = $config['per_page'];
	$offset = (int) $this->uri->segment(4);
        
        
        
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']= $this->model_home->berita('berita', $limit, $offset);
        $data['pagination']= $this->pagination->create_links();
        $this->load->view('home/header');
        $this->load->view('home/berita',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    function kegiatan(){
        $config['base_url'] = base_url('home/kegiatan/hal/');
        $config['total_rows'] = $this->model_home->total_rows('kegiatan');
	$config['per_page'] = 5;

        /* config pagging */
	$config['full_tag_open'] = '<div class="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['first_url'] = '';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


	$this->pagination->initialize($config);		

	$limit = $config['per_page'];
	$offset = (int) $this->uri->segment(4);
        
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']= $this->model_home->kegiatan('kegiatan', $limit, $offset);
        $data['pagination']= $this->pagination->create_links();
        $this->load->view('home/header');
        $this->load->view('home/kegiatan',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    function prestasi(){
        $config['base_url'] = base_url('home/prestasi/hal/');
        $config['total_rows'] = $this->model_home->total_rows('prestasi');
	$config['per_page'] = 5;

        /* config pagging */
	$config['full_tag_open'] = '<div class="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['first_url'] = '';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


	$this->pagination->initialize($config);		

	$limit = $config['per_page'];
	$offset = (int) $this->uri->segment(4);
        
        
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']= $this->model_home->prestasi('prestasi', $limit, $offset);
        $data['pagination']= $this->pagination->create_links();
        $this->load->view('home/header');
        $this->load->view('home/prestasi',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    
    function detail_berita(){
        $id = $this->uri->segment(3);
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['record']     =  $this->model_home->detail_berita($id)->row_array();
        $this->load->view('home/header');
        $data['p']= $this->model_home->profile()->row_array();
        $this->load->view('home/detail_berita',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    
    }
    
    function detail_prestasi(){
        $id = $this->uri->segment(3);
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['p']= $this->model_home->profile()->row_array();
        $data['berita']= $this->model_home->lihat_berita();
        $data['record']     =  $this->model_home->detail_prestasi($id)->row_array();
        $this->load->view('home/header');
        $this->load->view('home/detail_prestasi',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    
    }
    
    function detail_kegiatan(){
        $id = $this->uri->segment(3);
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']     =  $this->model_home->detail_kegiatan($id)->row_array();
        $this->load->view('home/header');
        $this->load->view('home/detail_kegiatan',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    
    }

    function guru(){
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']= $this->model_home->guru();
        $data['p']= $this->model_home->profile()->row_array();
        $this->load->view('home/header');
        $this->load->view('home/guru',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    function detail_guru(){
        $id = $this->uri->segment(3);
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']     =  $this->model_home->detail_guru($id)->row_array();
        $this->load->view('home/header');
        $this->load->view('home/detail_guru',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    
    }
    
  
    function siswa(){
        $config['base_url'] = base_url('home/siswa/hal/');
        $config['total_rows'] = $this->model_home->total_rows('siswa');
	$config['per_page'] = 20;

        /* config pagging */
	$config['full_tag_open'] = '<div class="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['first_url'] = '';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);		

	$limit = $config['per_page'];
	$offset = (int) $this->uri->segment(4);
        

        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']= $this->model_home->siswa('siswa', $limit, $offset);
        $data['pagination']= $this->pagination->create_links();
        $this->load->view('home/header');
        $this->load->view('home/siswa',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    function detail_siswa(){
        $id = $this->uri->segment(3);
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']     =  $this->model_home->detail_siswa($id)->row_array();
        $this->load->view('home/header');
        $this->load->view('home/detail_siswa',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    
    }
  
    function penitipan(){
        $data['record']= $this->model_home->penitipan();
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $this->load->view('home/header');
        $this->load->view('home/penitipan',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    }
    
    function detail_penitipan(){
        $id = $this->uri->segment(3);
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']     =  $this->model_home->detail_penitipan($id)->row_array();
        $this->load->view('home/header');
        $this->load->view('home/detail_penitipan',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    
    }
    
    function kurikulum(){
        $id = $this->uri->segment(3);
        $data['prestasi']= $this->model_home->lihat_prestasi();
        $data['kegiatan']= $this->model_home->lihat_kegiatan();
        $data['berita']= $this->model_home->lihat_berita();
        $data['p']= $this->model_home->profile()->row_array();
        $data['record']     =  $this->model_home->kurikulum($id);
        $this->load->view('home/header');
        $this->load->view('home/kurikulum',$data);
        $this->load->view('home/sidebar');
        $this->load->view('home/footer');
    
    }
}
