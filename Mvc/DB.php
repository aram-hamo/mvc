<?php declare(strict_types=1);
namespace AramHamo\Mvc;
use \PDO;

class DB{
    public $conn;
    function __construct(){
      try{
        $this->conn = new \PDO("sqlite:/".__DIR__."/../db.sqlite");
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      }catch(Exception $e){
        echo $e;
      }
    }
}
