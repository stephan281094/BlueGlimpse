<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->users = $this->model->count('users', 'id');
        $this->view->posts = $this->model->count('posts', 'post_id');
        $this->view->render('index/index');
    }
    
    function create() {
        $username = $_POST['username'];
        $password = Hash::create('md5', $_POST['password']);
        $email = $_POST['email'];
        $level = $_POST['level'];
        $this->view->messagetitle = 'User '. $this->model->create('users', $username, $email, $password, $level);
        $this->view->render('check/index');
    } 
}
