<?php

class Model_guru extends CI_Model{
    
    function lihat(){
        $query="SELECT g.*, k.kelas as kelas
                from guru g
                join kelas k
                on g.id_kelas=k.id_kelas";
                return $this->db->query($query);
   }
    
    function tambah($data){
        $this->db->insert('guru',$data);
    }

    function get_one($id){
        $param = array('id_guru'=>$id);
        return $this->db->get_where('guru',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_guru',$id);
        $this->db->update('guru',$data);
    }
    
    function hapus($id){
        $this->db->where('id_guru',$id);
        $this->db->delete('guru');
        
    }
    
    function detail($id){
        $query="SELECT g.*, k.kelas as kelas
                from guru g
                join kelas k
                on g.id_kelas=k.id_kelas
                where g.id_guru='$id'";
        return $this->db->query($query);
    }
    
    }