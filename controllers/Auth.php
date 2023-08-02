<?php declare(strict_types=1);
namespace AramHamo\Mvc\Controllers;
use AramHamo\MvcCore\View;
use AramHamo\Mvc\Models\User;

class Auth{
  public function get(){
    $user = new User;
    if(isset($_POST["register"])){
      $tokan = bin2hex(openssl_random_pseudo_bytes(16));
      $user->firstName = $_POST["firstName"];
      $user->lastName  = $_POST["lastName"];
      $user->username  = $_POST["username"];
      $user->password  = password_hash($_POST["password"],PASSWORD_BCRYPT);
      $user->email     = $_POST["email"];
      $user->tokan     = $tokan;
      $user->create();
      exec("mkdir /home/git/".$_POST["username"]);
      setcookie("tokan",$tokan,time()+60*60*24*30,'/',CONFIG["GENERAL"]["HOST"]);
      header("Location: /");
    }else if(isset($_POST["login"])){
      $query = $user->showWhere("username",$_POST["username"]);
      if(password_verify($_POST['password'],$query[0]['password'])){
        setcookie("tokan",$query[0]["tokan"],time()+60*60*24*30,'/',CONFIG["GENERAL"]["HOST"]);
        header("Location: /");
      }
    }
    return View::render("auth",array("title"=>"auth"));
  }
  public function post(){
    $this->get();
  }
  public function update(){
  }
  public function delete(){
  }
}
