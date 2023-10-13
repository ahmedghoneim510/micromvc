<?php 
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFIG",APP.DS.'config');
define("CORE",APP.DS.'core');
define("CONTROLLERS",APP.DS.'controllers');
define("MODELS",APP.DS.'models');
define("VIEWS",APP.DS.'views');

// config
define("DOMAIN_NAME","http://fmvc.test/");
define("DATABASE","mvctest");
define("USERNAME","root");
define("SERVER","localhost");
define("PASSWORD","");
define("DATABASE_TYPE","mysql");


require_once '../vendor/autoload.php';
$obj=new \MVC\core\app();

?>