<?php declare(strict_types=1);
require_once '../vendor/autoload.php';
define("CONFIG",parse_ini_file('../.env',true));
use AramHamo\MvcCore\Router;

$router = new Router;
$_SERVER['SERVER_SOFTWARE'] = $_SERVER['SERVER_SOFTWARE'] ?? '';
define('SERVERSOFTWARE',$_SERVER['SERVER_SOFTWARE']);

if(CONFIG["GENERAL"]["FORCE_SSL"] && $_SERVER["SERVER_SOFTWARE"] !== '' && empty($_SERVER["HTTPS"])){
  $_SERVER["HTTP_HOST"] = $_SERVER["HTTP_HOST"] ?? '';
  $_SERVER["REQUEST_URI"] = $_SERVER["REQUEST_URI"] ?? '';
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: "."https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] );
  exit;
}

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
