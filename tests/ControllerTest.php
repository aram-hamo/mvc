<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use AramHamo\MvcCore\Controller;

final class ControllerTest extends TestCase{
  public function test():void{

    $testController = new class {
      public function get(){
        return "GET";
      }
      public function post(){
        return "POST";
      }
      public function update(){
        return "UPDATE";
      }
      public function delete(){
        return "DELETE";
      }
    };
    $controllerGETResponse = Controller::serve(new $testController,"GET");
    $controllerPOSTResponse = Controller::serve(new $testController,"POST");
    $controllerUPDATEResponse = Controller::serve(new $testController,"UPDATE");
    $controllerDELETEResponse = Controller::serve(new $testController,"DELETE");
    $this->assertSame("GET",$controllerGETResponse);
    $this->assertSame("POST",$controllerPOSTResponse);
    $this->assertSame("UPDATE",$controllerUPDATEResponse);
    $this->assertSame("DELETE",$controllerDELETEResponse);
  }
}
