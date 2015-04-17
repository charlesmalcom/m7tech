<?php

class Model_projects extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('projects');
        return $query->result();

    }

    function create($projectsData){
        $this->db->insert("projects", $projectsData);          /* table, data */

    } /*  NOT STARTED */

    function getCurrent(){
        $query = $this->db->get_where('projects', array('show' => 'Yes'));
        return $query->result();
    }

    function getDetail($projects_id){
        $query = $this->db->get_where('projects', array('id' => $projects_id));
        return $query->result();

    }

    function update($projectsData){
        $this->db->update('projects', $projectsData, array('id' => $projectsData['id']));

    }

    function delete($projects_id){
        $this->db->delete('projects', array('id' => $projects_id));
    } /*  NOT STARTED */

}
