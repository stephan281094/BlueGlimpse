<?php

require 'config.php';
require '/../private/security.php';

function __autoload($class) {
    require "libs/$class.php";
}

$app = new Bootstrap();
$app->init();
