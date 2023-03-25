<?php declare(strict_types=1);
namespace AramHamo\Mvc;
use \PDO;
class DB {
  public $conn;
  function __construct(){

    switch(CONFIG["DATABASE"]["SOFTWARE"]){
      case "mysql":
        $GLOBALS["dsn"] = "mysql:host=". CONFIG["DATABASE"]["HOST"].";dbname=". CONFIG["DATABASE"]["DATABASE"];
      break;
      case "sqlite":
        $GLOBALS["dsn"] = "sqlite:/".__DIR__."/../". CONFIG["DATABASE"]["PATH"];
      break;
    }
    try{
      $this->conn = new \PDO($GLOBALS["dsn"]);
      $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(Exception $e){
      echo $e;
    }
  }
}
