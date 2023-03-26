<?php declare(strict_types=1);
namespace AramHamo\Mvc;

class Migration{
  public $table = [];
  public $options = '';
  public function id(){
    $this->table["id"] = "id INTEGER PRIMARY KEY AUTOINCREMENT";
  }

  public function text(String $attr,int $length=0){
    if($length < 1){
      $this->table["$attr"] = "$attr TEXT";
    }else{
      $this->table["$attr"] = "$attr TEXT($length)";
    }
    return $this;
  }

  public function char(String $attr,int $length=0){
    return $this->text($attr,$length);
  }

  public function varchar(String $attr,int $length=0){
    return $this->text($attr,$length);
  }

  public function int(String $attr,int $length){
    if($length < 1){
      $this->table[$attr] = "$attr INT";
    }else{
      $this->table[$attr] = "$attr INT($length)";
    }
    return $this;
  }

  public function bool(String $attr){
    $this->table[$attr] = "$attr BOOLEAN";
    return $this;
  }

  public function blob(String $attr){
    $this->table[$attr] = "$attr BLOB";
    return $this;
  }

  public function primaryKey($attr){
    $this->options .= ",PRIMARY KEY($attr)";
    return $this;
  }

  public function unique($attr){
    $this->options .= ",UNIQUE($attr)";
    return $this;
  }

  public function foreignKey(String $attr,String $table,String $tableAttr){
    $this->options .= ",FOREIGN KEY($attr) REFERENCES $table($tableAttr)";
    return $this;
  }

}
