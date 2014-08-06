<div class="bg section">
	<div class="bg grid">
		<div class="sixteen cell">
                    <div class="bg block">
                        <div class="title">
                            Post your message:
                        </div>
                        <div class="content">
                            <div class="bg field">
                                Press TAB to switch section easier.
                                <div class="title">Post title:</div>
                                <form action="dashboard/post" method="post">
                                    <input class="rounded" type="text" name="Post_title" placeholder="Enter your title here">
                                    <div class="title">Post message:</div>
                                    <textarea class="rounded" type="text" name="Post" placeholder="Enter your message here"></textarea>
                                    <input type="submit" value="Post"/>
                                </form>
                                <script type="text/javascript">
                                    $(function() {
                                        $('form').each(function() {
                                            $(this).find('textarea').keypress(function(e) {
                                                // Enter pressed withoud shift?
                                                if(e.which == 10 || e.which == 13 && ! e.shiftKey) {
                                                    this.form.submit();
                                                }
                                            });
                                            $(this).find('input[type=submit]').hide();
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sixteen cell">
                    <div class="bg block">
                        <div class="title">
                            Popular posts
                        </div>
                            <div class="content">
                                <?php foreach($this->overview as $key => $value):?>
                                <div class="bg post block">
                                    <div class="header">
                                        <div class="title"><?=$value['post_title']?></div>
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
