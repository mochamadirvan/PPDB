<?php

class Dashboard extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_dashboard');
    }
    
    function index(){
        $data = array(
			'berita' => $this->model_dashboard->get_berita()->num_rows(),
                        'prestasi' => $this->model_dashboard->get_prestasi()->num_rows(),
                        'kelas' => $this->model_dashboard->get_kelas()->num_rows(),
                        'kegiatan' => $this->model_dashboard->get_kegiatan()->num_rows(),
                        'guru' => $this->model_dashboard->get_guru()->num_rows(),
                        'siswa' => $this->model_dashboard->get_siswa()->num_rows(),
                        'titipan' => $this->model_dashboard->get_titipan()->num_rows(),
                        'daftartk' => $this->model_dashboard->get_daftartk()->num_rows(),
                        'daftarpenitipan' => $this->model_dashboard->get_daftarpenitipan()->num_rows(),
                        'contact' => $this->model_dashboard->get_contact()->num_rows(),
                        'alumni' => $this->model_dashboard->get_alumni()->num_rows()
	);
        $this->template->load('template','dashboard/dashboard',$data);
    }

}