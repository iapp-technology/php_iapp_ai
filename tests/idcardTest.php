<?php 
use \PHPUnit\Framework\TestCase;
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;
class idcardTest extends TestCase{
    //  var $apikey;
    // public function apikey($apikey){
    //    $apikey = $GLOBALS['apikey'];
    // }
 
  public function testIdcardFront()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual-> idcard_front("media/id-card-front.jpg");
      
      $expect = new api;
      $expect-> idcard_front("media/id-card-front.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "IdCard Front API is not working");
    }

    public function testIdcardBack()
    {
      $actual = new api;
      $actual->apikey($GLOBALS['apikey']);
      $actual->idcard_back("media/id-card-back.jpg");

      $expect = new api;
      $expect-> idcard_back("media/id-card-back.jpg");

        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "IdCard Back API is not working");
    }
    
}












?>