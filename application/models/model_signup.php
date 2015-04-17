<?php

class Model_signup extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('signup');
        return $query->result();

    }

    function create($signupData){
        $this->db->insert("signup", $signupData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('signup', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($signup_id){
        $query = $this->db->get_where('signup', array('id' => $signup_id));
        return $query->result();

    }

    function update($signupData){
        $this->db->update('signup', $signupData, array('id' => $signupData['id']));

    }

    function delete($signup_id){
        $this->db->delete('signup', array('id' => $signup_id));
    }

    function verify(){


    }
}
