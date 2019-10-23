<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model{


    function login($nip,$password)
    {
        $chek=  $this->db->get_where('siswa',array('nik'=>$nik,'password'=>  md5($password),'status'=>'1'));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    function login_guru($nip,$password,$status)
    {
        $chek=  $this->db->get_where('guru',array('nip'=>$nip,'password'=>  md5($password),'status'=>$status));
        if($chek->num_rows()>0){
            return 1;
        } else{
            return 0;
        }
    }
    
    function cek_username($username)
    {
        $chek=  $this->db->get_where('user',array('username'=>$username));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
}