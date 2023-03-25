<?php declare(strict_types=1);
namespace AramHamo\Mvc;
use AramHamo\Mvc\Controllers\Home;

class Routes{
  public static function listen(String $preq){
    switch($preq){
      case '':
        Controller::serve(new Home);
        break;
      default:
        echo "<h1>404</h1>";
    }
  }
}
