<?php

class Model_prestasi extends CI_Model {

    function lihat(){
        $query="SELECT p.*, g.nama as nama
                from prestasi p
                join guru g
                on p.id_guru=g.id_guru";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $param = array('id_prestasi'=>$id);
        return $this->db->get_where('prestasi',$param);
    }
    
    function tambah($data){
        $this->db->insert('prestasi',$data);
    }
//    
    function edit($data,$id)
    {
        $this->db->where('id_prestasi',$id);
        $this->db->update('prestasi',$data);
    }
//    
    function hapus($id){
        $this->db->where('id_prestasi',$id);
        $this->db->delete('prestasi');
        
    }

}