<?php
use AramHamo\Mvc\Models\User;
$user = new User;

if(isset($_COOKIE["tokan"])){
  define("userdata", $user->showWhere("tokan",$_COOKIE["tokan"]));
  if(!isset(userdata[0])){
    header("Location: /auth/");
  }
}else{
  header("Location: /auth/");
  exit;
}
