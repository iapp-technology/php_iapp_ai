<?php 
use \PHPUnit\Framework\TestCase;

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class thaiasrTest extends TestCase{
 
  public function testASR()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->asr("media/data.wav");

      $expect = new api;
      $expect->asr("media/data.wav");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Thai ASR API is not working");
    }
    
}

?>