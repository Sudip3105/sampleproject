<?php
// This is global bootstrap for autoloading

define('BASE_PATH', dirname(dirname(dirname(dirname(__DIR__)))));
require(BASE_PATH .'/config.php');
require(BASE_PATH .'/system/database.php');
