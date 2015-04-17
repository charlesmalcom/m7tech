<?php

class Model_options extends CI_Model{

    function getOptionsYN(){
        $query = $this->db->query("SELECT * FROM optYN");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->option] = $dropdown->option;
        }

        return $dropDownList;
    }

    function getLocations(){
        $query = $this->db->query("SELECT * FROM locations WHERE available = 'Yes'");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->location] = $dropdown->location;
        }

        return $dropDownList;
    }

    function getStates(){
        $query = $this->db->query("SELECT * FROM optStates");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->state] = $dropdown->state;
        }

        return $dropDownList;
    }

    function getProjectTypes(){
        $query = $this->db->query("SELECT * FROM optProjectTypes");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->type] = $dropdown->type;
        }

        return $dropDownList;
    }

    function getCategories(){
        $query = $this->db->query("SELECT * FROM appSecurity");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->directory] = $dropdown->directory;
        }

        return $dropDownList;
    }

    function getGroups(){
        $query = $this->db->query("SELECT * FROM securityGroups");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->group] = $dropdown->group;
        }

        return $dropDownList;
    }

    function getStudentsEmail(){
        $query = $this->db->query("SELECT * FROM students");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->email] = $dropdown->first_name.' '.$dropdown->last_name;
        }

        return $dropDownList;
    }

    function getPayee(){
        $query = $this->db->query("SELECT * FROM optBillsCategory");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->payee] = $dropdown->payee;
        }

        return $dropDownList;
    }

    function getBillStatus(){
        $query = $this->db->query("SELECT * FROM optBillStatus");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->status] = $dropdown->status;
        }

        return $dropDownList;
    }

    function getWeekNumber($date){
        $ddate = "2012-10-18";
        $duedt = explode("-", $ddate);
        $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
        $week  = (int)date('W', $date);
        echo "Weeknummer: " . $week;
    } /* [ NOT SURE ABOUT ] */

    function getAdminSections(){
        $query = $this->db->query("SELECT * FROM optAdminSections");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[lcfirst($dropdown->section)] = $dropdown->section;
        }
                return $dropDownList;
    }

    function getPaymentTypes(){
        $query = $this->db->query("SELECT * FROM optPaymentTypes");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[lcfirst($dropdown->type)] = $dropdown->type;
        }
        return $dropDownList;
    }

    function getCurrentClientsDD(){
        $query = $this->db->query("SELECT * FROM clients WHERE haveBusiness = 'Yes'");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->id] = $dropdown->businessName;
        }
        return $dropDownList;
    }

    function getWeekRange($dt_min){
        //$dt_min = "2009-05-10";
        $dt_min = new DateTime("last sunday");
        $dt_max = clone($dt_min);
        $dt_max->modify('+6 days');

        $dateArray = array($dt_min, $dt_max);
        return $dateArray;
    } /* [ NOT SURE ABOUT ] */

    function getSystemStatus($section){

        /*
         * get date of current transaction
         * loop it thru getWeekRange
         *
         * itteriate the start & stop dates & count
         * look to see if particular item is "approved'
         * then count them
         *
         */

        /* get week start & stop dates */
        $dt_min = date("Y/m/d");
        $dt_min = new DateTime("last sunday");
        $dt_max = clone($dt_min);
        $dt_max->modify('+6 days');


        //project start
        //$queryStop = $this->db->where('stop_date BETWEEN "'. date('Y-m-d', strtotime($dt_min)). '" and "'. date('Y-m-d', strtotime($dt_max)).'"');




        //project stop
        //$this->db->where('stop_date BETWEEN "'. date('Y-m-d', strtotime($dt_min)). '" and "'. date('Y-m-d', strtotime($dt_max)).'"');
        $this->db->where('stop_date BETWEEN "2015-03-08" and "2015-03-15"');
        //$this->db->where('stop_date BETWEEN "$dt_min" and "$dt_min"');
        $queryStop = $this->db->get('projects');
        //$queryStop = $this->db->get($section);
        return $queryStop->result();


        //another example
        //$this->db->where('order_date >=', $first_date);
        //$this->db->where('order_date <=', $second_date);
        //return $this->db->get('orders');



        //end of function
        //$queryArray = array($queryStart, $queryStop);
        //return $queryArray;




        /*
            <label>$titleData Starting</label><span id='box' class='unread'>$resultData[starting]<br />
            <label>$titleData Stopping</label><span id='box' class='unread'>$resultData[stopping]<br />
            <label>$titleData Needs Reviewed</label><span id='box' class='unread'>$resultData[needsReviewed]<br />
            <label>$titleData Total</label><span id='box' class='unread'>$resultData[total]<br />
        */


    }

    function maxLength($str, $maxlen){
        if ($str == NULL) $str = NULL;

        if (strlen($str) <= $maxlen){
            $lengthArray = array($str, $str);
            return $lengthArray;
            //return $str;
        }

        $newstr = substr($str, 0, $maxlen);
        //if (substr($newstr, -1, 1) != ' ') $newstr = substr($newstr, 0, strrpos($newstr, " ")); /* idk what this does */
        //return $newstr; /* original code */

        $lengthArray = array($newstr, $str);
        return $lengthArray;
    }

    function getBookmarksCategory(){
        $query = $this->db->query("SELECT * FROM bookmarksCategory");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->category] = $dropdown->category;
        }

        return $dropDownList;
    }

    function checkIP($ip){
        $pri_addrs = array(
            '10.0.0.0|10.255.255.255',
            '172.16.0.0|172.31.255.255',
            '192.168.0.0|192.168.255.255',
            '169.254.0.0|169.254.255.255',
            '127.0.0.0|127.255.255.255'
        );

        $long_ip = ip2long($ip);
        if($long_ip != -1) {

            foreach($pri_addrs AS $pri_addr)
            {
                list($start, $end) = explode('|', $pri_addr);

                // IF IS PRIVATE
                if($long_ip >= ip2long($start) && $long_ip <= ip2long($end))
                    return (TRUE);
            }
        }

        return (FALSE);




    }

    function getClassId(){
        $query = $this->db->query("SELECT * FROM classes WHERE available = 'Yes'");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->courseId] = $dropdown->courseId ." (". $dropdown->name.")";
        }

        return $dropDownList;


    }

    function getStudentId(){
        $query = $this->db->query("SELECT * FROM students WHERE available = 'Yes'");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[$dropdown->courseId] = $dropdown->courseId ." (". $dropdown->name.")";
        }

        return $dropDownList;


    }

    function getClassItems(){
        $query = $this->db->query("SELECT * FROM classItems");
        $dropdowns = $query->result();

        foreach($dropdowns as $dropdown)
        {
            $dropDownList[lcfirst($dropdown->item)] = $dropdown->item;
        }
        return $dropDownList;
    }


}