<?php declare(strict_types=1);
namespace AramHamo\Mvc;
use  AramHamo\Mvc\DB;

class Schema extends DB{
  public function create(String $table_name,Array $attr,String $options){
    $keys = array_keys($attr);
    $i = 0;
    $fields = '';
    foreach($keys as $key){
      if(count($attr)-1 == $i){
        $fields .= $attr[$key];
      }else{
        $fields .= $attr[$key].",";
      }
      $i++;
    }
    $stmt = "CREATE TABLE IF NOT EXISTS $table_name (".$fields.$options.");";
    $createTable = $this->conn->exec($stmt);
  }
  public function dropIfExists(String $tableName){
    $tdrop = $this->conn->prepare("DROP TABLE IF EXISTS ".$tableName);
    return $tdrop->execute();
  }
}
