<!DOCTYPE html>
<html>
<head>
    <title>Blue Glimpse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="icon" href="public/images/fav.png" type="image/png">
</head>
<body>
    <nav class="bg header noselect section">
        <ul>
            <li>
                <a href="<?php echo URL; ?>." class="logo item">
                <span class="blue">Blue</span>
                <span class="purple">Glimpse</span>
                </a>
            </li>
            <div class="bg menu button">
                    <img src="http://f.cl.ly/items/1U2c3b1215383h3a2T2r/icon-menu.svg" alt="">
            </div>
            <div class="items">
                <li><a href="<?php echo URL; ?>blog" data-item="blog" class="item">Blog</a></li>
                <li><a href="<?php echo URL; ?>help" data-item="help" class="item">Help</a></li>
                <?php if (Session::get('loggedIn') == true):?>
                    <li><a href="<?php echo URL; ?>index/profile" data-item="profile" class="right item"><?=Session::get('username')?></a>
                        <ul>
                            <li><a href="<?php echo URL; ?>index/settings" data-item="settings" class="item">Settings</a></li>
                            <li><a href="<?php echo URL; ?>index/logout" data-item="logout" class="item">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="<?php echo URL; ?>login" data-item="login" class="right item">Login</a></li>
                <?php endif; ?>
            </div>
        </ul>
    </nav>
	
	
