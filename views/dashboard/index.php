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
                                       <?php print_r($this->overview);  ?>  
				</div>
			</div>
		</div>
	</div>
</div>