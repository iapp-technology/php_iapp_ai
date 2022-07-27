<?php 
use \PHPUnit\Framework\TestCase; 
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class thaittsTest extends TestCase{
 
  public function testKaitomtts()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->kaitom_tts("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่");

      $expect = new api;
      $expect->kaitom_tts("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "ThaiTTS Kaitom API is not working.");
    }
    
    public function testCeetts()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->cee_tts("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่");
      
      $expect = new api;
      $expect->cee_tts("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "ThaiTTS Cee API is not working.");
    }
}

?>