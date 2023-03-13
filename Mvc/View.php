<?php declare(strict_types=1);
namespace AramHamo\Mvc;

class View{
  public static $viewData = array();

  public static function render($view,$viewData){
    self::$viewData = $viewData;
    return include __DIR__.'/../views/'.$view.'.php';
  }
}
