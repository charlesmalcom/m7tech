<?php

class Model_contracts extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('contracts');
        return $query->result();

    }

    function create($contractsData){
        $this->db->insert("contracts", $contractsData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('contracts', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($contracts_id){
        $query = $this->db->get_where('contracts', array('id' => $contracts_id));
        return $query->result();

    }

    function update($contractsData){
        $this->db->update('contracts', $contractsData, array('id' => $contractsData['id']));

    }

    function delete($contracts_id){
        $this->db->delete('contracts', array('id' => $contracts_id));
    }

}
