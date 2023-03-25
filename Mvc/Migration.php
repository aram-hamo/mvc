<?php declare(strict_types=1);
namespace AramHamo\Mvc;

class Migration{
  public $table = [];
  public function id(){
    $this->table["id"] = "id INTEGER PRIMARY KEY AUTOINCREMENT";
  }

  public function text(String $attr,int $length,bool $unique=false){
    if($length < 1){
      $this->table["$attr"] = "$attr TEXT";
    }else{
      $this->table["$attr"] = "$attr TEXT($length)";
    }
    return $this;

  }
  public function char(String $attr,int $length,bool $unique=false):String {
    return self::text($attr,$length,$unique);
  }
  public static function varchar(String $attr,int $length,bool $unique=false):String {
    return self::text($attr,$length,$unique);
  }
  public static function int(String $attr,int $length,bool $unique=false):String{
    if($length < 1){
      return "$attr INT";
    }else{
      return "$attr INT($length)";
    }

  }
  public static function bool(String $attr,bool $unique=true):String{
    return "$attr BOOLEAN";

  }
  public static function blob(String $attr):String{
    return "$attr BLOB";

  }
  public function primaryKey($attr){
    $this->table["$attr"] .= ",PRIMARY KEY($attr)";
    return $this;

  }
  public function unique($attr){
    return "UNIQUE($attr)";

  }
}
