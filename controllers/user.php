<?php

class User extends Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function create(){
		$username	= $_POST['username'];
		$email		= $_POST['email'];
		$password	= Hash::create('md5', $_POST['password']);
		
		if($username != null && $email != null && $password != null){
			$this->model->create($username, $email, $password);
		}else{
			header("location: http://blueglimpse.com/");
		}
	}
}
