<?php
/**
 * Created by PhpStorm.
 * User: Wael
 * Date: 24/01/2016
 * Time: 15:38
 */
define('DS',DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH',ROOT.DS.'views');

require_once(ROOT.DS.'lib'.DS.'init.php');



App::run($_SERVER ['REQUEST_URI']);
