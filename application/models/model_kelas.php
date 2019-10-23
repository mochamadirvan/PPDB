<?php

class Model_kelas extends CI_Model {

    function lihat(){
        $query="select * from kelas";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $param = array('id_kelas'=>$id);
        return $this->db->get_where('kelas',$param);
    }
    
    function tambah($data){
        $this->db->insert('kelas',$data);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kelas',$id);
        $this->db->update('kelas',$data);
    }
    
    function hapus($id){
        $this->db->where('id_kelas',$id);
        $this->db->delete('kelas');
        
    }

}