<?php
use AramHamo\MvcCore\Migration;
use AramHamo\MvcCore\Schema;
$GLOBALS['tableName'] = "users";
$table = new class {
  static function up(){
    $s = new Schema;
    $m = new Migration;
    $m->id();
    $m->text("firstName");
    $m->text("lastName");
    $m->text("username")->unique("username");
    $m->text("password");
    $m->text("email");
    $m->bool("verified");
    $m->text("tokan")->unique("tokan");

    $s->create($GLOBALS['tableName'],$m->table,$m->options);
  }
  static function down(){
    $this->dropIfExists($GLOBALS['tableName']);
  }
};
