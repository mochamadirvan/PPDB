<?php

class Model_slide extends CI_Model {

    function lihat(){
        $query="select * from slide";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $param = array('id_slide'=>$id);
        return $this->db->get_where('slide',$param);
    }

    function edit($data,$id)
    {
        $this->db->where('id_slide',$id);
        $this->db->update('slide',$data);
    }


}