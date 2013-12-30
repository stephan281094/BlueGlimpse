<?php
	
class Dashboard_Model extends Model{
	function __construct(){
		parent::__construct();
	}
	
	public function run(){
		$sth = $this->db->prepare("SELECT * FROM posts LEFT JOIN users ON post_by = user_id ORDER BY post_date DESC");
		$sth->execute();
		
                $count = $sth->rowCount();
		if (!$count){
                    echo 'Error';
                }
                else if($count == 0){
                    echo 'database is empty';
                }
                else {
                    echo 'show database content';
                }   
	}
}
