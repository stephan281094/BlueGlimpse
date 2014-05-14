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
        $username = ucfirst($_POST['username']);
        $password = Hash::create('md5', $_POST['password']);
        $email = $_POST['email'];
        $level = $_POST['level'];
        $this->view->messagetitle = $this->model->create('users', $username, $email, $password, $level);
        $this->view->render('check/index');
    } 
    
    function searchuser(){
        $username = ucfirst($_POST['username']); 
        if($this->model->searchuser($username) != 0){
        $user = $this->model->searchuser($username);
            foreach ($user as $key => $value) {
                $this->view->messagetitle = 'Info about user '.$value['username'];
                $this->view->id = $value['id'];
                $this->view->username = $value['username'];
                $this->view->email = $value['email'];
                $this->view->regdate = $value['registration_date'];
                $this->view->activated = $value['activated'];
                $this->view->lastactive = $value['last_active'];
                $this->view->level = $value['level'];
                $this->view->render('check/user');
}
        }
        else {
            $this->view->messagetitle = 'User '.$username.' not found';
            $this->view->render('check/index');            
        }
    }
    
    function updateuser() {
        $id = $_POST['id'];
        $username = ucfirst($_POST['username']);
        $activated = $_POST['activated'];
        $level = $_POST['level'];
        $this->view->messagetitle = $this->model->updateuser($id, $username, $activated, $level);
        $this->view->render('check/index');  
    }
    
    function deleteuser() {
        $id = $_POST['id'];
        $username = ucfirst($_POST['username']);
        $this->view->messagetitle = $this->model->deleteuser($id, $username);
        $this->view->render('check/index');  
    }
}
