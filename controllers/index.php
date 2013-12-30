<?php

class Index extends Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->item = 'index';
		
		if(Session::get('loggedIn') == true){
			$this->view->render('dashboard/index');
		}else{
			$this->view->render('index/index');
		}
	}
	
	function details() {
		$this->view->render('index/index');
	}
}