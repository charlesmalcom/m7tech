<?php

class Model_rates extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('rates');
        return $query->result();

    }

    function create($ratesData){
        $this->db->insert("rates", $ratesData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('rates', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($rates_id){
        $query = $this->db->get_where('rates', array('id' => $rates_id));
        return $query->result();

    }

    function update($ratesData){
        $this->db->update('rates', $ratesData, array('id' => $ratesData['id']));

    }

    function delete($rates_id){
        $this->db->delete('rates', array('id' => $rates_id));
    }

}
