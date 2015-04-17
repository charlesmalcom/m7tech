<?php

class Model_services extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('services');
        return $query->result();

    }

    function create($servicesData){
        $this->db->insert("services", $servicesData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('services', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($services_id){
        $query = $this->db->get_where('services', array('id' => $services_id));
        return $query->result();

    }

    function update($servicesData){
        $this->db->update('services', $servicesData, array('id' => $servicesData['id']));

    }

    function delete($services_id){
        $this->db->delete('services', array('id' => $services_id));
    }

}
