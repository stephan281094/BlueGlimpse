<?php

class Database extends PDO {

    function __construct() {
        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }

    function count($table, $id) {
        $sth = $this->prepare("SELECT COUNT(:id) AS count FROM $table");
        $sth->bindParam(':id', $id);
        $sth->execute();
        return $sth->fetchAll();
    }

    function create($from, $username, $email, $password, $level) {
        $sth = $this->prepare("INSERT INTO $from (username, email, password, registration_date, level) VALUES (:username, :email, :password, CURDATE(), :level);");
        $sth->bindParam(':username', $username);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':password', $password);
        $sth->bindParam(':level', $level);
        $sth->execute();
        
        if ($sth->rowCount() == 1) {
            return $username. ' succesfully added';
        } else {
            return $username. ' not created ';
        }
    }

    function edit($from) {
        
    }

    function delete($from) {
        
    }

}
