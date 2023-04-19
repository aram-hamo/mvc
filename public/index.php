<?php declare(strict_types=1);
require_once '../vendor/autoload.php';
define("CONFIG",parse_ini_file('../.env',true));
use AramHamo\MvcCore\Router;

$router = new Router;

if(CONFIG["GENERAL"]["FORCE_SSL"] && php_sapi_name() !== 'cli' && empty($_SERVER["HTTPS"])){
  $_SERVER["HTTP_HOST"] = $_SERVER["HTTP_HOST"] ?? '';
  $_SERVER["REQUEST_URI"] = $_SERVER["REQUEST_URI"] ?? '';
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: "."https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] );
  exit;
}
switch(php_sapi_name()){
  case "cli-server":
    if(isset($_SERVER['PATH_INFO'])){
      $router->listen($_SERVER['PATH_INFO']);
    }else{
      $router->listen('');
    }
  break;
  case "apache2handler":
    if(isset($_GET['url'])){
      $router->listen($_GET['url']);
    }else{
      $router->listen('');
    }
  break;
  case "cli":
    if(isset($argv[1])){
      $router->listen($argv[1]);
    }else{
      $router->listen('');
    }
  break;
  default:
    if(!strpos($_SERVER['SERVER_SOFTWARE'],'nginx')){
      if(isset($_SERVER['DOCUMENT_URI'])){
        $router->listen($_SERVER['DOCUMENT_URI']);
      }else{
        $router->listen('');
      }
    }else{
      echo "server software not supported";
    }
}
