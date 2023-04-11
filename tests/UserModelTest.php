<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use AramHamo\Mvc\Models\User;

define("CONFIG",parse_ini_file('.env',true));

final class UserModelTest extends TestCase{
  public function test(){
    $user = new User;
    $user->firstName = "testusername";
    $user->lastName = "testlastname";
    $user->username = "test-user";
    $user->password = "1234";
    $user->email = "example@example.com";
    $user->verified = true;
    $user->tokan = "1234";
    $delete = $user->execute("delete from users where username='test-user'");
    $create = $user->create();
    
    $this->assertNull($delete,"couldn't delete a user");
    $this->assertNull($create,"couldn't create a user");

  }
}
