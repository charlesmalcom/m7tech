<?php

class Model_students extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('students');
        return $query->result();

    }

    function create($studentData){
        $this->db->insert("students", $studentData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('students', array('current' => 'Yes'));
        return $query->result();

    }

    function getDetail($student_id){
        $query = $this->db->get_where('students', array('id' => $student_id));
        return $query->result();

    }

    function update($studentData){
        $this->db->update('students', $studentData, array('id' => $studentData['id']));

    }

    function delete($student_id){
        $this->db->delete('students', array('id' => $student_id));
    }

}
