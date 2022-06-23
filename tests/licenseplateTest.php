<?php 

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class licenseplateTest extends \PHPUnit\Framework\TestCase{
 
  public function testLicensePlate()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->license_plate("media/plate.jpg");

      $expect = new api;
      $expect-> license_plate("media/plate.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    
}

?>