<?php

class Model_clients extends CI_Model{

    function getAll($sortBy){
        if (isset($sortBy)) {
            $this->db->order_by($sortBy, "asc");
        } else {
            $this->db->order_by("id", "asc");
        }
        
        $query = $this->db->get_where('clients');
        return $query->result();

    }

    function create($clientData){
        //$this->db->insert("users", $data['dbData']);      /* table, data */
        $this->db->insert("clients", $clientData);          /* table, data */

    } /*  NOT STARTED */

    function getCurrent(){
        $query = $this->db->get_where('clients', array('haveBusiness' => 'Yes'));
        return $query->result();

    }

    function getDetail($client_id){
        $query = $this->db->get_where('clients', array('id' => $client_id));
        return $query->result();
    }

    function update($clientData){
        $this->db->update('clients', $clientData, array('id' => $clientData['id']));
    }

    function delete($client_id){
        $this->db->delete('clients', array('id' => $client_id));
    } /*  NOT STARTED */

    function getBusinessNames($search){

        $this->db->select("*");
        $whereCondition = array('businessName' =>$search);
        $this->db->where($whereCondition);
        $this->db->from('clients');
        $query = $this->db->get();
        return $query->result();

    }

    function getClientAccountInfo($client_id){
        $query = $this->db->get_where('clientAccountInfo', array('client_id' => $client_id));
        //$query = $this->db->get_where('clientAccountInfo', array('client_id' => '20'));
        //$query = $this->db->get_where('clientAccountInfo');
        return $query->result();

    }

    function search(){

        $search_text = $_POST['search_text'];
        //$search_category = $_POST['search_category'];

        //if ($search_category == 'All') { $this->db->select('*'); }
        //else { $this->db->where('category', $search_category); }

        //$this->db->where('category', $search_category);
        $this->db->like('businessName', $search_text);

        $query = $this->db->get_where('clients');
        return $query->result();

    }

}
