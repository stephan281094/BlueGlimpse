<?php

class User extends Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function create(){
		$username	= ucfirst($_POST['username']);
		$email		= $_POST['email'];
		$password	= Hash::create('md5', $_POST['password']);
		
		if($username != null && $email != null && $password != null){
                    if($this->model->create($username, $email, $password) == 1){ 
                        $this->view->title= $username.' is succesfull registered' .header("refresh: 10; url=".URL);
                        $this->view->content='We have send you an email to your email adress containing a link, please click this link to activate your account. <br /> Be sure to check your junk mail!';
                    }else {
                        $this->view->title= $username.' is not registered' .header("refresh: 6; url=".URL);
                        $this->view->content='Please try again later, or use another email address.';
                    }

                    $header = 'MIME-Version: 1.0' . "\r\n";
                    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $header .= "From: noreply@blueglimpse.com\r\n";
                    $message = '<html><head><title></title></head><body>Welcome to Blue Glimpse ' .$username. ', <br /><br />
                                We are really happy to see you here! <br />
                                <a href="http://BlueGlimpse.com/user/activate/'.sha1($email).'">Please use this link to activate your account</a>. <br /><br />
                                Blue Glimpse admin.
                                </body></html>';
                    mail($email, "Welcome to Blue Glimpse" , $message, $header );
                    $this->view->render('check/index');
		}else{
                    header("location: ".URL);
		}
	}
        
        public function activate($email){
            if($this->model->activate($email) == 1){ 
                $this->view->title= 'You are succesfully activated' .header("refresh: 6; url=".URL);
                $this->view->content= 'You can now log in to Blue Glimpse!';
            }else {
                $this->view->title= 'Oops looks like an error!' .header("refresh: 6; url=".URL);
                $this->view->content= 'You are already activated, if not notify one of our admins!';
            }
            $this->view->render('check/index');
        }
}