<?php

class Model_locations extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('locations');
        return $query->result();

    }

    function create($locationsData){
        //$this->db->insert("users", $data['dbData']);      /* table, data */
        $this->db->insert("locations", $locationsData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('locations', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($locations_id){
        $query = $this->db->get_where('locations', array('id' => $locations_id));
        return $query->result();

    }

    function update($locationsData){
        $this->db->update('locations', $locationsData, array('id' => $locationsData['id']));

    }

    function delete($locations_id){
        $this->db->delete('locations', array('id' => $locations_id));
    }

}
