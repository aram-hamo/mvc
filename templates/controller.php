<?php
$controllerTemplate = '<?php declare(strict_types=1);
namespace AramHamo\Mvc\Controllers;
use AramHamo\MvcCore\View;

class '.ucfirst($pageName).'{
  public function get(){
    return View::render("'.strtolower($pageName).'",array("title"=>"'.$pageName.'"));
  }
  public function post(){
  }
  public function update(){
  }
  public function delete(){
  }
}';
