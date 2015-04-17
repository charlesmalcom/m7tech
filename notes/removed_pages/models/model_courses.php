<?php

class Model_courses extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('courses');
        return $query->result();

    }

    function create($courseData){
        //$this->db->insert("users", $data['dbData']);      /* table, data */
        $this->db->insert("courses", $courseData);          /* table, data */

    } /*  NOT STARTED */

    function getCurrent(){
        $query = $this->db->get_where('courses', array('available' => 'Yes'));
        return $query->result();

    }

    function getDetail($course_id){
        $query = $this->db->get_where('courses', array('id' => $course_id));
        return $query->result();

    }

    function update($courseData){
        $this->db->update('courses', $courseData, array('id' => $courseData['id']));

    }

    function delete($course_id){
        $this->db->delete('courses', array('id' => $course_id));
    } /*  NOT STARTED */

    function getCourseInfo($course){
        $query = $this->db->get_where('courses', array('nameShort' => $course));
        return $query->result();
    }

    function getCoursesOffered(){
        $query = $this->db->get_where('courses', array('available' => 'Yes'));
        return $query->result();
    }

    function getMyCourses(){

        /*
         * get student id
         * match to courseID in coursesEnrolled
         * then list all classes in coursematerial
         *
         * */

        $studentId= '';
        $courseId= '';




        $query = $this->db->get_where('coursematerial', array('courseID' => '$courseId', 'available' => 'Yes'));
        return $query->result();


    }

}