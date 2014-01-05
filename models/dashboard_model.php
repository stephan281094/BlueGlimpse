<?php

class Dashboard_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function overview() {
        $sth = $this->db->prepare("SELECT * FROM posts");
        $sth->execute();
        return $sth->fetchAll();
    }
}

