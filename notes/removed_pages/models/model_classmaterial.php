<?php

class Model_classmaterial extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('classmaterial');
        return $query->result();

    }

    function create($classmaterialData){
        $this->db->insert("classmaterial", $classmaterialData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('classmaterial', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($classmaterial_id){
        $query = $this->db->get_where('classmaterial', array('id' => $classmaterial_id));
        return $query->result();

    }

    function update($classmaterialData){
        $this->db->update('classmaterial', $classmaterialData, array('id' => $classmaterialData['id']));

    }

    function delete($classmaterial_id){
        $this->db->delete('classmaterial', array('id' => $classmaterial_id));
    }

}
