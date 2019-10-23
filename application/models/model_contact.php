<?php

class Model_contact extends CI_Model{
    
    function lihat(){
        return $this->db->get('contact');
    }
    
    function hapus($id){
        $this->db->where('id_contact',$id);
        $this->db->delete('contact');
    }

}
