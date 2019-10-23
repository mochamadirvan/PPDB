<?php

class Model_psb extends CI_Model {

    function lihat(){
        $query="select * from psb";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $param = array('id_psb'=>$id);
        return $this->db->get_where('psb',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_psb',$id);
        $this->db->update('psb',$data);
    }

}