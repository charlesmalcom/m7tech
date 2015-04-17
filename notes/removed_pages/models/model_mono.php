<?php

class Model_mono extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('mono');
        return $query->result();

    }

    function create($monoData){
        $this->db->insert("mono", $monoData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('mono', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($mono_id){
        $query = $this->db->get_where('mono', array('id' => $mono_id));
        return $query->result();

    }

    function update($monoData){
        $this->db->update('mono', $monoData, array('id' => $monoData['id']));

    }

    function delete($mono_id){
        $this->db->delete('mono', array('id' => $mono_id));
    }

}
