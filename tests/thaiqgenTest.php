<?php 
use \PHPUnit\Framework\TestCase;

ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class thaiqgenTest extends TestCase{
 
  public function testThaiQGen()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->thai_qgen("ผมพูดภาษาไทย");
      $expect = new api;
      $expect->thai_qgen("ผมพูดภาษาไทย");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Thai Question Generator API is not working.");
    }
    
}

?>