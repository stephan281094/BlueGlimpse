<?php
	
class User_Model extends Model{
	function __construct(){
		parent::__construct();
	}
	
	public function create($username, $email, $password, $level){
		$sth = $this->db->prepare("INSERT into users (`username`, `email`, `password`, `level`) "
								. "VALUES (:username, :email, :password, :level)");
		$sth->bindParam(':username', $username);
		$sth->bindParam(':email', $email);
		$sth->bindParam(':password', $password);
		$sth->bindParam(':level', $level);
		$sth->execute();
		
		header("location: http://blueglimpse.com/");
	}
}