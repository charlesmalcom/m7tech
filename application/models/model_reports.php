<?php

class Model_reports extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('reports');
        return $query->result();

    }

    function create($reportsData){
        $this->db->insert("reports", $reportsData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('reports', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($reports_id){
        $query = $this->db->get_where('reports', array('id' => $reports_id));
        return $query->result();

    }

    function update($reportsData){
        $this->db->update('reports', $reportsData, array('id' => $reportsData['id']));

    }

    function delete($reports_id){
        $this->db->delete('reports', array('id' => $reports_id));
    }

}
