<?php
	
class User_Model extends Model{
	function __construct(){
		parent::__construct();
	}
	
	public function create($username, $email, $password){
		$sth = $this->db->prepare("INSERT into users (`username`, `email`, `password`, `registration_date`) "
								. "VALUES (:username, :email, :password, CURDATE())");
		$sth->bindParam(':username', $username);
		$sth->bindParam(':email', $email);
		$sth->bindParam(':password', $password);
		$sth->execute();
		
		header("location: " . URL);
	}
}
