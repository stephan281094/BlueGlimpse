<?php

class Blog extends Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->item = 'blog';
		$this->view->render('blog/index');
	}
}	
