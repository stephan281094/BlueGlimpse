<?php

class Dashboard extends Controller {
	function __construct(){
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false){
			Session::destroy();
			header('location: '.URL.'login');
			exit;
		}
	}

	function index(){
		$this->view->item = 'dashboard';
		$this->view->render('dashboard/index');
	}
        
	function logout(){
		Session::destroy();
		header('location: '.URL);
		exit;
	}
}	