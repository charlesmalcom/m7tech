<?php

class Model_appsecurity extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('appSecurity');
        return $query->result();

    }

    function create($appSecurityData){
        //$this->db->insert("users", $data['dbData']);      /* table, data */
        $this->db->insert("appSecurity", $appSecurityData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('appSecurity', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($appSecurity_id){
        $query = $this->db->get_where('appSecurity', array('id' => $appSecurity_id));
        return $query->result();

    }

    function update($appSecurityData){
        $this->db->update('appSecurity', $appSecurityData, array('id' => $appSecurityData['id']));

    }

    function delete($appSecurity_id){
        $this->db->delete('appSecurity', array('id' => $appSecurity_id));
    }

}
