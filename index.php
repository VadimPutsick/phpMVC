<?php
require 'config.php';

function __autoload($class){
    require "libs/$class.php";
}
$rooter = new Router();

$rooter->init();