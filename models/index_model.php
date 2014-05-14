<?php

class Index_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function count($table, $id) {
        return $this->db->count($table, $id);
    }
    
    function create($from, $username, $email, $password, $level) {
        $sth = $this->db->prepare("INSERT INTO $from (username, email, password, registration_date, level) VALUES (:username, :email, :password, CURDATE(), :level);");
        $sth->bindParam(':username', $username);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':password', $password);
        $sth->bindParam(':level', $level);
        $sth->execute();
        
        if ($sth->rowCount() == 1) {
            return 'User '.$username.' succesfully added';
        } else {
            return 'User '.$username.' not created';
    }
}
    
    function searchuser($username){
        $sth = $this->db->prepare("SELECT id, username, email, registration_date, activated, last_active, level FROM users WHERE username = :username;");
        $sth->bindParam(':username', $username);
        $sth->execute();
        if($sth->rowcount() == 1){
            return $sth->fetchAll();
        }
        else {
            return false;
        }
    }
    
    function updateuser($id, $username, $activated, $level){
        $sth = $this->db->prepare("UPDATE users SET username=:username, activated=:activated, level=:level  WHERE id = :id;");
        $sth->bindParam(':id', $id);
        $sth->bindParam(':username', $username);
        $sth->bindParam(':activated', $activated);
        $sth->bindParam(':level', $level);
        $sth->execute();
        if($sth->rowcount() == 1){
            return 'User '.$username.' succesfull updated';
        }
        else {
            return 'User '.$username.' not updated';
        } 
    }
    
    function deleteuser($id, $username){
        $sth = $this->db->prepare("DELETE FROM users WHERE id = :id;");
        $sth->bindParam(':id', $id);
        $sth->execute();
        if($sth->rowcount() == 1){
            return 'User '.$username.' deleted';
        }
        else {
            return 'User '.$username.' not deleted';
        }
    }
}
