<?php

class Model_bills extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('bills');
        return $query->result();

    }

    function create($billsData){
        $this->db->insert("bills", $billsData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('bills', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($bills_id){
        $query = $this->db->get_where('bills', array('id' => $bills_id));
        return $query->result();

    }

    function update($billsData){
        $this->db->update('bills', $billsData, array('id' => $billsData['id']));

    }

    function delete($bills_id){
        $this->db->delete('bills', array('id' => $bills_id));
    }

}
