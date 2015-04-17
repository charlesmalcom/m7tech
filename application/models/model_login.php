<?php

class Model_login extends CI_Model {


    function verify() {

    /* CHECK USER CREDENTIALS IN DATABASE */
    $password=md5($this->config->item('password')); // MD5 password
    
    $whereArray = array('username' => $this->config->item('username'), 'password' => $password);
    $this->db->where($whereArray);
    $query = $this->db->get('userProfiles');
    if ($query->num_rows() > 0) { return true; }
    else{ return false;  }

    }

    function checkCookie() {
    //$this->input->cookie('login')

    if ($this->input->cookie('login') == "good"){ return true; }
    else{ return false; }

    }

    function logout(){
    delete_cookie('login');
    redirect($this->config->item('baseURL'));

    }


}
