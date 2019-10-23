<?php

class Model_menu_guru extends CI_Model{


    function get_profile($nip)
    {
        $query="SELECT g.*, k.kelas as kelas
                from guru g
                join kelas k
                on g.id_kelas=k.id_kelas
                where g.nip='$nip'";
        return $this->db->query($query);
    }
    
    function get_siswa($nip)
    {
        $query="SELECT s.* 
                from siswa s join kelas k
                on s.id_kelas=k.id_kelas
                join guru g
                on k.id_kelas=g.id_kelas
                where g.nip='$nip'";
        return $this->db->query($query);
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
    
    function get_all_siswa()
    {
        $data = $this->db->query('select * from siswa ');
		return $data;
    }
    
    function get_siswa_kelas($nip)
    {
        $query="SELECT s.* 
                from siswa s join kelas k
                on s.id_kelas=k.id_kelas
                join guru g
                on k.id_kelas=g.id_kelas
                where g.nip='$nip'";
        return $this->db->query($query);
    }
    
    function get_kegiatan()
    {
        $data = $this->db->query('select * from kegiatan ');
		return $data;
    }
    
    function get_prestasi()
    {
        $data = $this->db->query('select * from prestasi ');
		return $data;
    }
    
    function guru($nip)
    {
        $query="SELECT * from guru where nip='$nip'";
        return $this->db->query($query);
    }
    
    function siswa($nisn)
    {
        $query="SELECT * from siswa where nisn='$nisn'";
        return $this->db->query($query);
    }
    
    
    
}