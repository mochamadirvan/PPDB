<?php

class Model_home extends CI_Model{
    
    function lihat_kegiatan(){
        $query="select * from kegiatan order by tgl_upload desc limit 3";
        return $this->db->query($query);; 
        
    }
    
    function lihat_prestasi(){
        $query="select * from prestasi order by tgl_upload desc limit 3";
        return $this->db->query($query); 
        
    }
    
    function daftartk($data){
        $this->db->insert('pendaftar',$data);
    }
    
    function daftarpenitipan($data){
        $this->db->insert('penitipan',$data);
    }
    
    function contact($data){
        $this->db->insert('contact',$data);
    }
    
    function lihat_berita(){
        $query="select * from berita order by tgl_upload desc limit 3";
        return $this->db->query($query); 
        
    }
    
    function profile(){
        $query="select * from profile";
        return $this->db->query($query); 
        
    }
    
    function psb(){
        $query="select * from psb";
        return $this->db->query($query); 
        
    }
    
    function berita($table,$limit,$offset){
//        $query="select * from prestasi";
        $this->db->from($table);
        $this->db->order_by("tgl_upload","desc");;
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
        return $query;
        
    }
    
    function prestasi($table,$limit,$offset){
        //$query="select * from prestasi";
        $this->db->from($table);
        $this->db->order_by("tgl_upload","desc");;
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
        return $query; 
            
    }
    
    function kegiatan($table,$limit,$offset){
//        $query="select * from kegiatan";
        $this->db->from($table);
        $this->db->order_by("tgl_upload","desc");;
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
        return $query;
        
    }
    

    function detail_berita($id)
    {
        $query="select b.*, g.nama as nama
                from berita b join guru g
                on b.id_guru=g.id_guru
                where id_berita='$id'";
        return $this->db->query($query);
    }
    
    function detail_prestasi($id)
    {
        $query="SELECT p.*, g.nama as nama
                from prestasi p
                join guru g
                on p.id_guru=g.id_guru
                where id_prestasi='$id'";
        return $this->db->query($query);
    }
    
    function detail_kegiatan($id)
    {
        $query="SELECT k.*, g.nama as nama
                from kegiatan k
                join guru g
                on k.id_guru=g.id_guru
                where id_kegiatan='$id'";
        return $this->db->query($query);
    }
    
    public function total_rows($table){
	return $this->db->count_all_results($table);
    }
    
    function slide(){
        $query="select * from slide";
        return $this->db->query($query);
    }

    function guru(){
        $query="SELECT g.*, k.kelas as kelas
                from guru g
                join kelas k
                on g.id_kelas=k.id_kelas";
        return $this->db->query($query);
    }
    
    function detail_guru($id)
    {
        $query="SELECT g.*, k.kelas as kelas
                from guru g
                join kelas k
                on g.id_kelas=k.id_kelas
                where g.id_guru ='$id'";
        return $this->db->query($query);
    }
    
    function siswa($table,$limit,$offset){
        $this->db->select ( 'g.*,k.kelas as kelas')
             ->from ('siswa as g')
             ->join ('kelas k', 'g.id_kelas=k.id_kelas');
        $this->db->order_by("k.kelas");
        $this->db->limit($limit,$offset);
        $query = $this->db->get();
        return$query;
    }
    
    function detail_siswa($id)
    {
        $query="SELECT g.*, k.kelas as kelas
                from siswa g
                join kelas k
                on g.id_kelas=k.id_kelas
                where g.id_siswa='$id'";
        return $this->db->query($query);
    }
    
  
    function penitipan(){
        $query="select * from penitipan where status='terdaftar'";
        return $this->db->query($query);
    }
    
    function detail_penitipan($id)
    {
        $query="select * from penitipan where id_penitipan='$id'";
        return $this->db->query($query);
    }
    
    function kurikulum(){
        $query="select * from kurikulum";
        return $this->db->query($query);
    }
}
