<?php

class Model_kurikulum extends CI_Model{
    
    function lihat(){
        $query="SELECT * from kurikulum ";
        return $this->db->query($query);
        
    }
    
    function tambah($data){
        $this->db->insert('kurikulum',$data);
    }

    function get_one($id){
        $param = array('id_kurikulum'=>$id);
        return $this->db->get_where('kurikulum',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kurikulum',$id);
        $this->db->update('kurikulum',$data);
    }
//    
    function hapus($id){
        $this->db->where('id_kurikulum',$id);
        $this->db->delete('kurikulum');
        
    }
}