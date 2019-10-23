<?php

class Model_dashboard extends CI_Model{


    function get_kelas()
    {
        $data = $this->db->query('select * from kelas ');
		return $data;
    }
    
    function get_prestasi()
    {
        $data = $this->db->query('select * from prestasi ');
		return $data;
    }
    
    function get_kegiatan()
    {
        $data = $this->db->query('select * from kegiatan ');
		return $data;
    }
    
    function get_berita()
    {
        $data = $this->db->query('select * from berita ');
		return $data;
    }
    
    
    function get_guru()
    {
        $data = $this->db->query('select * from guru ');
		return $data;
    }
    
    function get_siswa()
    {
        $query="select * from siswa where status = 'aktif'";
        return $this->db->query($query);
    }
    
    function get_titipan()
    {
        $query="select * from penitipan where status = 'terdaftar'";
        return $this->db->query($query);
    }
    
    function get_alumni()
    {
        $query="select * from siswa where status = 'alumni'";
        return $this->db->query($query);
    }
    
    function get_contact()
    {
        $data = $this->db->query('select * from contact ');
		return $data;
    }
    
    function get_daftartk()
    {
        $data = $this->db->query('select * from pendaftar ');
		return $data;
    }
    
    function get_daftarpenitipan()
    {
        $query="select * from penitipan where status = 'pendaftar'";
        return $this->db->query($query);
    }
    
   
   
}