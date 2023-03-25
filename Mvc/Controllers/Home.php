<?php declare(strict_types=1);
namespace AramHamo\Mvc\Controllers;
use AramHamo\Mvc\View;

class Home{
  public function get(){
    return View::render("home",array("title"=>"home"));
  }
  public function post(){
    echo "POST\n";
  }
  public function update(){
    echo "UPDATE\n";
  }
  public function delete(){
    echo "DELETE\n";
  }
}
