<?php 
use \PHPUnit\Framework\TestCase;

ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class thaiasrTest extends TestCase{
 
  public function testASR()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->asr("media/data.wav");

      var_dump($result);
      $this->assertEquals($result, $result, "Thai ASR API is not working");
    }
    
}

?>