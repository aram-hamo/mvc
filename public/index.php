<?php declare(strict_types=1);
require_once '../vendor/autoload.php';
require_once '../.config.php';
use AramHamo\MvcCore\Router;

$router = new Router;
$_SERVER['SERVER_SOFTWARE'] = $_SERVER['SERVER_SOFTWARE'] ?? '';
define('SERVERSOFTWARE',$_SERVER['SERVER_SOFTWARE']);

if(!empty(SERVERSOFTWARE)){
  if(strpos(SERVERSOFTWARE,'PHP') !== false){
    $SERVER_SOFTWWARE = "php";
    if(isset($_SERVER['PATH_INFO'])){
      $router->listen($_SERVER['PATH_INFO']);
    }else{
      $router->listen('');
    }
  }else if(strpos(SERVERSOFTWARE,'Apache') !== false){
    $SERVER_SOFTWWARE = "apache";
    if(isset($_GET['url'])){
      $router->listen($_GET['url']);
    }else{
      $router->listen('');
    }
  }
}else{
  if(isset($argv[1])){
    $router->listen($argv[1]);
  }else{
    $router->listen('');
  }
}
