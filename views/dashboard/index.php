<div class="bg section">
	<div class="bg grid">
		<div class="sixteen cell">
			<div class="bg block">
				<div class="title">
					Popular posts
				</div>
				<div class="content">
					<?php foreach($this->overview as $key => $value):?>
						<div class="bg post block">
							<div class="header">
								<div class="title">asdsa</div>
								<div class="date"><?=$value['post_date']?></div>
								<div class="author"><strong><?=$value['username']?></strong> on </div>
							</div>
							<?=$value['post_content']?><br>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>
