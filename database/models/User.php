<?php declare(strict_types=1);
namespace AramHamo\Mvc\Models;
use AramHamo\MvcCore\Model;

define('tableName','users');

class User extends Model{
  public String $firstName;
  public String $lastName;
  public String $username;
  public String $password;
  public String $email;
  public bool $verified;
  public String $tokan;
}
