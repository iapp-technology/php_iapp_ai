<?php 
use \PHPUnit\Framework\TestCase;
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class licenseplateTest extends TestCase{
 
  public function testLicensePlate()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->license_plate("media/plate.jpg");

      var_dump($result);
      $this->assertEquals('success', $result->message, "License Plate OCR API is not working");
    }
    
}

?>