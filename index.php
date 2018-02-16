<?php
session_start();
//config
define('ROOT',dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

//require file
require_once "config.php";
require_once "library/database.class.php";
require_once "library/model.class.php";
require_once "library/view.class.php";
require_once "library/controller.class.php";

function __autoload($className)
{
	$fileName	 = str_replace("\\", DS, $className) . '.php.';
	if(!file_exists($fileName))
	{
		return false;
	}
	$fileName;
}


//MVC
$page		= (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : 'home';
$controller = ROOT . DS . 'modules' . DS . 'controller' . DS . $page . 'Controller.php';

if(file_exists($controller))
{
	require_once $controller;
	$action = (isset($_GET['action']) && $_GET['action']) ? $_GET['action'] : 'index';
	
	$obj = new $controllerName();
}	

?>