<?php

class Model_articles extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('articles');
        return $query->result();

    }

    function create($articlesData){
        $this->db->insert("articles", $articlesData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('articles', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($articles_id){
        $query = $this->db->get_where('articles', array('id' => $articles_id));
        return $query->result();

    }

    function update($articlesData){
        $this->db->update('articles', $articlesData, array('id' => $articlesData['id']));

    }

    function delete($articles_id){
        $this->db->delete('articles', array('id' => $articles_id));
    }

    function getDisapprovedArticles(){
        $this->db->like('approved', 'No');
        $this->db->from('articles');
        return $this->db->count_all_results();
    }

}
