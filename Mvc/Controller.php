<?php declare(strict_types=1);
namespace AramHamo\Mvc;
use AramHamo\Mvc\Controllers\Home;

class Controller{
    public static function serve($c){
      $method = $_SERVER["REQUEST_METHOD"] ?? "GET";
      if($method == "GET"){
        $c->get();

      }else if($method == "POST"){
        $c->post();

      }else if($method == "UPDATE"){
        $c->update();

      }else if($method == "DELETE"){
        $c->delete();
      }
    }
}
