<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use AramHamo\MvcCore\Controller;
use AramHamo\MvcCore\View;

final class ControllerTest extends TestCase{
/** @test */
  public function ControllerGETTest(){

    $testController = new class {
      public function get(){
        return "Response";
      }
      public function post(){
      }
      public function update(){
      }
      public function delete(){
      }
    };
    $controllerResponse = Controller::serve(new $testController);
    $this->assertSame("Response",$controllerResponse);
  }
}
