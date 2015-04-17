<?php

class Model_leads extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('leads');
        return $query->result();

    }

    function create($leadsData){
        $this->db->insert("leads", $leadsData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('leads', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($leads_id){
        $query = $this->db->get_where('leads', array('id' => $leads_id));
        return $query->result();

    }

    function update($leadsData){
        $this->db->update('leads', $leadsData, array('id' => $leadsData['id']));

    }

    function delete($leads_id){
        $this->db->delete('leads', array('id' => $leads_id));
    }

    function getUncontactedLeads(){
        $this->db->like('contacted', 'No');
        $this->db->from('leads');
        return $this->db->count_all_results();
    }

}
