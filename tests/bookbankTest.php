<?php 

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class bookbankTest extends \PHPUnit\Framework\TestCase{
 
  public function testBookbankOcr()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->bookbank_ocr("media/E7393203-15.jpg");

      $expect = new api;
      $expect->bookbank_ocr("media/E7393203-15.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    
}

?>