<?php

class Model_classes extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('classes');
        return $query->result();

    }

    function create($classesData){
        $this->db->insert("classes", $classesData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('classes', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($classes_id){
        $query = $this->db->get_where('classes', array('id' => $classes_id));
        return $query->result();

    }

    function update($classesData){
        $this->db->update('classes', $classesData, array('id' => $classesData['id']));

    }

    function delete($classes_id){
        $this->db->delete('classes', array('id' => $classes_id));
    }

}
