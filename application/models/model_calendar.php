<?php

class Model_calendar extends CI_Model{


    function createCalendar($data){
        $this->db->insert("calendar", $data);         /* table, data */
    }

    function listEvents(){
        $query = $this->db->get_where('calendar', array('available' => 'Yes'));
        return $query->result();
    }

    function getCalendarEvents($year, $month) {

        //$whereArray = array('year' => '2015', 'month' => '2');
        //$query = $this->db->get_where('calendar', $whereArray);


        //$whereArray = array('date' => '2015-02-09');
        //$whereArray = array('year' => $year, 'month' => $month);
        //$whereArray = array('year' => '2015', 'month' => '2');
        $whereArray = array('year' => '2015');
        $this->db->where($whereArray);
        $this->db->select('day, event');
        $query = $this->db->get('calendar');
        return $query->result();


        //$query = $this->db->get_where('calendar', array('date' => $date));
        //$query = $this->db->get_where('calendar', array('date' => '2015-02-09'));

    }

}