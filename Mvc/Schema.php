<?php declare(strict_types=1);
namespace AramHamo\Mvc;
use  AramHamo\Mvc\DB;

class Schema extends DB{
  public function create(String $table_name,Array $attr){
    $table = $attr;
    $fields = '';
    for($i = 1 ;count($table)-1 >= $i;$i++){
      if(count($table)-1 == $i){
        $fields .= $table[$i];
      }else{
        $fields .= $table[$i].",";
      }
    }
    $stmt = "CREATE TABLE IF NOT EXISTS $table_name ($fields);";
    $createTable = $this->conn->exec($stmt);
  }
  public function dropIfExists(String $tableName){
    $tdrop = $this->conn->prepare("drop table if exists ".$tableName);
    return $tdrop->execute();
  }
}
