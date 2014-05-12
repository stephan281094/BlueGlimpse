<?php

class Index_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function count($table, $id) {
        return $this->db->count($table, $id);
    }
    
    function create($from, $username, $email, $password, $level) {
        return $this->db->create($from, $username, $email, $password, $level);
    }
}
