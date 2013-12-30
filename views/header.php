<!DOCTYPE html>
<html>
<head>
	<title>Blue Glimpse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/main.css">
</head>
<body>
	<div class="bg header noselect section">
			<a href="<?php echo URL; ?>." class="logo item">
			<span class="blue">Blue</span>
			<span class="purple">Glimpse</span>
		</a>
		<div class="bg menu button">
			<img src="http://f.cl.ly/items/1U2c3b1215383h3a2T2r/icon-menu.svg" alt="">
		</div>
		<div class="items">
			<a href="<?php echo URL; ?>blog" data-item="blog" class="item">Blog</a>
			<a href="<?php echo URL; ?>help" data-item="help" class="item">Help</a>
			<?php if (Session::get('loggedIn') == true):?>
				<a href="<?php echo URL; ?>dashboard/logout" data-item="logout" class="right item">Logout</a>
			<?php else: ?>
				<a href="<?php echo URL; ?>login" data-item="login" class="right item">Login</a>
			<?php endif; ?>
		</div>
	</div>
	
	