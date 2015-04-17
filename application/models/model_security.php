<?php

class Model_security extends CI_Model{


    function checkSecurity(){
        $firstSegment = $this->uri->segment(1);

        $query = $this->db->get_where('appSecurity', array('directory' => $firstSegment));
        return $query->result();
    }

    function checkGroup($group){
        $query = $this->db->get_where('securityGroup', array('group' => $group));
        return $query->result();
    }

    function hasAccess(){

        /* required in order for this to work */
        $firstSegment = $this->uri->segment(1);

        /* check cookies to see if user has already logged on [STEP 1 of 3] */
        if ($this->input->cookie('login', true) == 'good'){ $cookieAccess='1'; }
        else { $cookieAccess='0'; }


        /* check to see what user's access level is [STEP 2 of 3] */
        $whereArray = array('username' => $this->input->cookie('username'));
        $this->db->where($whereArray);
        $item = $this->db->get('userProfiles');                           /* here we select every column of the table */
        $data = $item->result_array();
        $userSecurityGroup = ($data[0]['securityGroup']);

        if ($userSecurityGroup == $firstSegment){ $userAccess='1'; }      /* this ties the user to their directory */
        else { $userAccess='0'; }


        /* check to see if directory is in secure list [STEP 3 of 3] */
        $whereArray = array('directory' => $firstSegment, 'type' => $userSecurityGroup);
        $this->db->where($whereArray);
        $item = $this->db->get('appSecurity');                            /* here we select every column of the table  */
        $data = $item->result_array();
        $directorySecurityGroup = isset($data[0]['directory']) ? $data[0]['directory'] : NULL;
        $directorySecurityType = isset($data[0]['type']) ? $data[0]['type'] : NULL;

        if ($directorySecurityGroup == $this->uri->segment(1)){ $dirAccess='1'; }
        else { $dirAccess='0'; }


        /* if all 3 are good, do nothing. [FINAL] */
        //if ( $cookieAccess=='1' & $dirAccess=='1' & $userAccess=='1') { /* temp disabled */
        if ( $cookieAccess=='1' & $dirAccess=='1') { return true; }
        else { return false; }                                              /* if any 1 is bad, redirect to error page */

            /*
                echo "at least 1 of them are bad<br />";
                echo "cookie ".$cookieAccess."<br />";
                echo "dir ".$dirAccess."<br />";
                echo "user ".$userAccess."<br />";

                echo "User Security Group: ".$userSecurityGroup."<br />";
                echo "Directory Security Group: ".$directorySecurityGroup."<br />";
                echo "cookie login: ".$this->input->cookie('login')."<br />";
                echo "cookie username: ".$this->input->cookie('username')."<br />";
            */

    }

    function getSecurityGroup(){
        //$whereArray = array('username' => $this->config->item('username'), $this->config->item('password'));
        $whereArray = array('username' => $this->config->item('username'));
        $this->db->where($whereArray);
        $item = $this->db->get('userProfiles');                             // here we select every column of the table //
        $data = $item->result_array();
        return ($data[0]['securityGroup']);

    }

    function getHomeDirectory(){
        //$whereArray = array('username' => $this->config->item('username'), $this->config->item('password'));
        $whereArray = array('username' => $this->config->item('username'));
        $this->db->where($whereArray);
        $item = $this->db->get('userProfiles');                             // here we select every column of the table //
        $data = $item->result_array();
        return ($data[0]['homeDirectory']);

    }




}