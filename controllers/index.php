<?php

class Index extends Controller {
	function __construct() {
		parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
	}
	
	function index() {
		$this->view->item = 'index';
		
		if(Session::get('loggedIn') == true){
			$this->loadModel('dashboard');
                        $this->view->overview = $this->model->overview();
			$this->view->render('dashboard/index');
		}else{
			$this->view->render('index/index');
		}
	}
	
	function details() {
		$this->view->render('index/index');
	}
	
	function logout() {
        Session::destroy();
        header('location: ' . URL);
        exit;
    }
}
