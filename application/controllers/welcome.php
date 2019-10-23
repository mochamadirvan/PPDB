<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
        $this->load->model('model_home');
    }
         
	public function index()
	{
		//$this->load->view('welcome_message');
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
}
