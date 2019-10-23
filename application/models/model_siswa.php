<?php

class Model_siswa extends CI_Model{
    
    function lihat(){
        $query="SELECT g.*, k.kelas as kelas
                from siswa g
                join kelas k
                on g.id_kelas=k.id_kelas
                order by g.id_siswa";
        return $this->db->query($query); 
        
    }
    
    function tambah($data){
        $this->db->insert('siswa',$data);
    }

    function get_one($id){
        $param = array('id_siswa'=>$id);
        return $this->db->get_where('siswa',$param);
    }
    
    function get_one2($id){
        $param = array('id_pendaftar'=>$id);
        return $this->db->get_where('pendaftar',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_siswa',$id);
        $this->db->update('siswa',$data);
    }
//    
    function hapus($id){
        $this->db->where('id_siswa',$id);
        $this->db->delete('siswa');
        
    }
    
    function hapus2($id){
        $this->db->where('id_pendaftar',$id);
        $this->db->delete('pendaftar');
        
    }
//    
    function detail($id)
    {
        $query="SELECT g.*, k.kelas as kelas
                from siswa g
                join kelas k
                on g.id_kelas=k.id_kelas
                where g.id_siswa='$id'";
        return $this->db->query($query);
    }
    
    function daftar(){
        $data=  "select *, substring(tgl_daftar, 1,10) as daftar from pendaftar";
        return $this->db->query($data);
    }
    
     function s_daftartk(){
        $data=  "select *, substring(tgl_daftar, 1,10) as daftar from pendaftar order by tgl_daftar";
        return $this->db->query($data);
        
    }
    
    
}