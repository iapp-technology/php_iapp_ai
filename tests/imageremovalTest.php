<?php 
use \PHPUnit\Framework\TestCase; 
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class imageremovalTest extends TestCase{
 
  public function testImageRemoval()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->img_bg_removal("media/face.jpg");
      $expect = new api;
      $expect->img_bg_removal("media/face.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Image BG Removal API is not working");
    }
    
}

?>