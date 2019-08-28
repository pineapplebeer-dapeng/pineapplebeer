<?php
header('content-type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////

if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	die('require PHP > 5.3.0 !');
}

define('APP_DEBUG', true);

$PHP_SELF = $_SERVER['HTTP_HOST'];
// define('_PHP_FILE_', $_SERVER['SCRIPT_NAME']);
define('BASE_PATH', $PHP_SELF);

define('APP_PATH', './Application/');

require './ThinkPHP/ThinkPHP.php';
