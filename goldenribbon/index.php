<?php
session_start();
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// echo $request_uri[0] . "\n";
$uri = explode("/", $request_uri[0]);

// include './database/config.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_WARNING);

//PAGE VIEW CONTROLLERS
switch ($uri[1])
{
    //Home page
    case '':
	    require './views/home.php';
   	    break;
  //Home page
  case 'home':
    require './views/home.php';
 	    break;
    //Products
    case 'product':
     require './views/product.php';
     break;
   //Contact
     case 'contact':
    require './views/contact.php';
    break;
  //Sign in
      case 'signin':
     require './views/signin.php';
      break;
  //Sign up
    case 'signup':
    require './views/signup.php';
  break;

  //User Index
    case 'user-index':
    require './views/user-home.php';
  break;

    case 'user-home':
    require './views/user-home.php';
  break;

  //User-product
    case 'user-product':
    require './views/user-product.php';
  break;

  //User-contact
    case 'user-contact':
    require './views/user-contact.php';
  break;

  //cart
    case 'cart':
    require './views/cart.php';
  break;


//admin-home
  case 'admin-home':
  require './views/admin-home.php';
  break;

  case 'admin-index':
  require './views/admin-home.php';
  break;

  //admin-prod
  case 'admin-product':
  require './views/admin-product.php';
  break;

  //admin-clients
  case 'admin-clients':
  require './views/admin-clients.php';
  break;

  //admin-fb
  case 'admin-feedback':
  require './views/admin-feedback.php';
  break;

  //admin-fb
  case 'admin-add-product':
  require './views/admin-add-product.php';
  break;

    //admin-home
    case 'logout':
    require './controller/logout.php';
    break;













  //Faacebook
    case 'facebook':
    header ('location: ');
    break;
   //Twitter
     case 'witter':
      header ('location: Facebook.com');
    break;
    //Instagram
      case 'instagram':
      header ('location: Facebook.com');
      break;

	//Error
    default:
        header('HTTP/1.0 404 Not Found');
        require './views/404.php';
        break;
        }
?>
