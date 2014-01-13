<?php

class User extends Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function create(){
		$username	= $_POST['username'];
		$email		= $_POST['email'];
		$password	= md5($_POST['password']);
		$level;
		
		if(isset($_POST['level'])){
			$level = $_POST['level'];
		}else{
			$level = 1;
		}
		
		if($username != null && $email != null && $password != null){
			$this->model->create($username, $email, $password, $level);
		}else{
			header("location: http://blueglimpse.com/");
		}
	}
}
