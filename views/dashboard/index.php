<div class="bg section">
	<div class="bg grid">
		<div class="sixteen cell">
			<div class="bg block">
				<div class="title">
					Hooray!!
				</div>
				<div class="content">
					You are now logged in, <?php echo Session::get('username'); ?>! <br>
					We are really happy to see you here!
					<br><br><br>
					<?php
						foreach ($this->overview as $key => $value){
							echo "<hr><strong>This post is uploaded by " . $value['username']
							. "</strong> <em class=\"right\">" . $value['post_date'] . "</em><br>"
							. $value['post_content'] . "<br>";
						}
					?> 
					<br>
				</div>
			</div>
		</div>
	</div>
</div>
