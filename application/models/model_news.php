<?php

class Model_news extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('news');
        return $query->result();

    }

    function create($newsData){
        $this->db->insert("news", $newsData);          /* table, data */

    } /*  NOT STARTED */

    function getCurrent(){
        $query = $this->db->get_where('news', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($news_id){
        $query = $this->db->get_where('news', array('id' => $news_id));
        return $query->result();

    }

    function update($newsData){
        $this->db->update('news', $newsData, array('id' => $newsData['id']));

    }

    function delete($news_id){
        $this->db->delete('news', array('id' => $news_id));
    } /*  NOT STARTED */

    function getDisapprovedNews(){
        $this->db->like('approved', 'No');
        $this->db->from('news');
        return $this->db->count_all_results();
    }

}
