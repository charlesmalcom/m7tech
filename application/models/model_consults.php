<?php

class Model_consults extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('consults');
        return $query->result();

    }

    function create($consultsData){
        $this->db->insert("consults", $consultsData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('consults', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($consults_id){
        $query = $this->db->get_where('consults', array('id' => $consults_id));
        return $query->result();

    }

    function update($consultsData){
        $this->db->update('consults', $consultsData, array('id' => $consultsData['id']));

    }

    function delete($consults_id){
        $this->db->delete('consults', array('id' => $consults_id));
    }

}
