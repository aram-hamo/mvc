<?php declare(strict_types=1);
namespace AramHamo\Mvc;

class Migration{
  public function id():String{
    return "id INTEGER PRIMARY KEY AUTOINCREMENT";
  }

  public function text(String $attr,int $length,bool $unique=false):String {
    if($length < 1){
      return "$attr TEXT";
    }else{
      return "$attr TEXT($length)";
    }

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
  public function primaryKey(){
    return "PRIMARY KEY($attr)";

  }
  public function unique($attr){
    return "UNIQUE($attr)";

  }
}
