<?php
session_start();
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// echo $request_uri[0] . "\n";
$uri = explode("/", $request_uri[0]);

include './database/config.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_WARNING);

//PAGE VIEW CONTROLLERS
switch ($uri[1]) 
{
    //Home page
    case '':
	    require './views/home.php';
   	    break;
   	case 'home':
   	    require './views/home.php';
   	    break;
   	//About page
   	case 'about':
   	    require './views/about.php';
   	    break;
	//Error
    default:
        header('HTTP/1.0 404 Not Found');
        require './views/404.php';
        break;
}

?>