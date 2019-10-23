<?php

class Model_profile extends CI_Model {

    function lihat(){
        $query="select * from profile";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $param = array('id_profile'=>$id);
        return $this->db->get_where('profile',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_profile',$id);
        $this->db->update('profile',$data);
    }

}