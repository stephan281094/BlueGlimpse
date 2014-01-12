<div class="bg section">
	<div class="bg grid">
		<div class="sixteen cell">
			<div class="bg block">
				<div class="title">
                                    Hooray!!
				</div>
				<div class="content">
                                    You are now logged in, <?php echo Session::get('username'); ?>! <br />
                                    We are really happy to see you here! <br />
                            <br />
                                    <?php 
                                        //print_r($this->overview);
                                        foreach($this->overview as $key => $value){
                                            echo "This post is uploaded by '".$value['username']."': <br />
                                                ".$value['post_content']."<br />".$value['post_date'];
                                        }
                                        ?>  <br />
				</div>
			</div>
		</div>
	</div>
</div>