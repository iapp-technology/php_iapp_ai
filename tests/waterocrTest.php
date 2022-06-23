<?php 

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class waterocrTest extends \PHPUnit\Framework\TestCase{
 
  public function testwaterOcrFile()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->water_file_ocr("media/water-meter.jpg");

      $expect = new api;
      $expect->water_file_ocr("media/water-meter.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }

    public function testwaterOcrBase64()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->water_base64_ocr("media/water-meter.txt");

      $expect = new api;
      $expect->water_base64_ocr("media/water-meter.txt");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    
}

?>