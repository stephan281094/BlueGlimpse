<?php

class Dashboard_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function overview() {
        $sth = $this->db->prepare("SELECT * FROM posts LEFT JOIN users ON post_by = user_id ORDER BY post_date DESC");
        $sth->execute();
        return $sth->fetchAll();
    }
}

