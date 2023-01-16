<?php 
use \PHPUnit\Framework\TestCase;
ini_set("include_path", "iapp-php-composer");
require_once 'iapp-php-composer/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;
class driverLicenseTest extends TestCase{
   
 
  public function testDriverLicense()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->driver_license("media/driver_card.png");
      
      $this->assertEquals("Success", $result->message , "IdCard Front API is not working");
    }
  
  
    
}












?>