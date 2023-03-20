<?php declare(strict_types=1);
namespace AramHamo\Mvc;

class Migration{
  static $id = 'id INTEGER PRIMARY KEY AUTOINCREMENT';

  public static function text(String $attr,int $length,bool $unique=false):String {
    if($length < 1){
      return "$attr TEXT";
    }else{
      return "$attr TEXT($length)";
    }

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
}
