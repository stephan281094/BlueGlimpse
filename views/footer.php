	<!-- SCRIPTs -->
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".item[data-item='<?php echo $this->item; ?>']").addClass('active');
		});
	</script>
</body>
</html>
