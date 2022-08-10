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
      $result = $actual->kaitom_tts("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่");
      // var_dump($result);
      // $result1 = binaryToString($result).PHP_EOL;
      // var_dump($result1);
      
      // $this->assertEquals($result, $result, "ThaiTTS Kaitom API is not working.");
      $this->assertIsString($result);
    }
    
    public function testCeetts()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->cee_tts("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่");
      // var_dump($result);
      // $result1 = pack('a*',$result);
      // print_r($result1);

      
      // $this->assertEquals($result, $result, "ThaiTTS Cee API is not working.");
      $this->assertIsString($result);
    }
}

// function binaryToString($binary)
// {
//     $binaries = explode(' ', $binary);
 
//     $string = null;
//     foreach ($binaries as $binary) {
//         $string .= pack('a*', dechex(bindec($binary)));
//     }
 
//     return $string;    
// }
?>