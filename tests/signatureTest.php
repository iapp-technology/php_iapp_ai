<?php 
use \PHPUnit\Framework\TestCase;

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class signatureTest extends TestCase{
 
  public function testSignature()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->signature_detection("media/signature.jpg");

      $expect = new api;
      $expect->signature_detection("media/signature.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Signature Detection API is not working");
    }
    
}

?>