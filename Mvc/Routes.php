<?php declare(strict_types=1);
namespace AramHamo\Mvc;
use AramHamo\Mvc\Controllers\notFound;

class Routes{
  public static $routes = array();
  public static function listen(String $preq){
    $routes = array();
    $routeFiles = glob("../routes/*.php");
    foreach($routeFiles as $routeFile){
      include $routeFile;
    }
    self::$routes = $routes;
    if(isset($routes[$preq])){
      Controller::serve(new self::$routes[$preq]);
    }else{
      Controller::serve(new notFound);
    }
  }
}
