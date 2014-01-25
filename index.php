<?php

require 'config.php';
require '../../../private/database.php';

function __autoload($class) {
    require "libs/$class.php";
}

$app = new Bootstrap();
$app->init();
