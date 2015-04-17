<?php

class Model_xxx extends CI_Model{


    function createXxxx($data){
        $this->db->insert("xxxxx", $data['dbData']); //table, data
    }

    function listXxxx(){
        $query = $this->db->query("SELECT * FROM xxxxx");
        return $query->result();
    }

    function listXxxxWhere($id){
        //$query = $this->db->query("SELECT * FROM users WHERE id='$id'");
        //return $query->result();

        //return $this->db->get_where('users', array('id' => $id));

        $query = $this->db->get_where('xxxxx', array('id' => $id));
        return $query->result();

    }

    function updateXxxx($data){
        $this->db->update('xxxxx', $data['dbData'], array('id' => $data['dbData']['id']));
    }

    function deleteXxxx($data){
        //$this->db->delete("users", $data); //table, array of info
        //$this->db->delete("users", 'id = $data['id']'); //table, array of info
        $this->db->delete('xxxxx', array('id' => $data['dbData']['id']));
    }

}
