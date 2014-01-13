<?php

class Login_Model extends Model {
	public function __construct(){
		parent::__construct();
	}

	public function run(){
		$sth = $this->db->prepare("SELECT id FROM users WHERE username = :username AND password = MD5(:password);");
		$sth->bindParam(':username', $_POST['username']);
		$sth->bindParam(':password', $_POST['password']);
		$sth->execute();

		$count = $sth->rowCount();
		if ($count === 1){
			Session::init();
			Session::set('loggedIn', true);
			Session::set('username', $_POST['username']);
			header('location: ' . URL . '.');
		}else{
			header('location: ' . URL . 'login');
		}
	}
}	