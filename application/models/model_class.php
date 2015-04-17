<?php

class Model_clients extends CI_Model{

    function createXxxx($data){
        $this->db->insert("xxxxx", $data['dbData']); //table, data
    }

    function listXxxxWhere($id){
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


    function getClasses($var){

        if (!empty($var)){
            $this->db->select('*');
            $this->db->from('classes');
            $this->db->order_by($var, 'asc');                   /* asc or desc  */
            $query = $this->db->get();
            return $query->result();

        }
        else{
            $query = $this->db->query("SELECT * FROM classes");
            return $query->result();

        }

    }

    function listClients(){
        $query = $this->db->query("SELECT * FROM xxxxx");
        return $query->result();
    }



}
