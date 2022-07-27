<?php 
use \PHPUnit\Framework\TestCase; 

ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class waterocrTest extends TestCase{
 
  public function testwaterOcrFile()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->water_file_ocr("media/water-meter.jpg");

      $this->assertEquals($result, $result, "Water File OCR API is not working.");
    }

    public function testwaterOcrBase64()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->water_base64_ocr("media/water-meter.txt");

      $this->assertEquals($result, $result, "Water base64 OCR API is not working.");
    }
    
}

?>