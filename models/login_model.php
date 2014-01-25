<?php

class Login_Model extends Model {
	public function __construct(){
		parent::__construct();
	}
	
	public function run(){
		$sth = $this->db->prepare("SELECT id FROM users WHERE username = :username AND password = :password");
		$sth->bindParam(':username', $_POST['username']);
		$sth->bindParam(':password', Hash::create('md5', $_POST['password']));
		$sth->execute();
		
		$user_id = $sth->fetchColumn();
		
		if($sth->rowCount() === 1){
			Session::init();
			Session::set('loggedIn', true);
			Session::set('username', $_POST['username']);
			Session::set('user_id', $user_id);
			$sth2 = $this->db->prepare("UPDATE users SET last_active = CURDATE() WHERE id = :id");
			$sth2->execute(array(':id' => $user_id));
			
			header('location: ' . URL . '.');
		}else{
			header('location: ' . URL . 'login');
		}
	}
}	
