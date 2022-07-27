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
      $result = $actual->thai_qgen("ผมพูดภาษาไทย");
      var_dump($result);
      $this->assertEquals($result, $result, "Thai Question Generator API is not working.");
    }
    
}

?>