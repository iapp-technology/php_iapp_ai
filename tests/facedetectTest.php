<?php 
use \PHPUnit\Framework\TestCase;
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class facedetectTest extends TestCase{
 
  public function testFaceDetectSingle()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->face_detect_single("media/face.jpg");
      var_dump($result);
      $this->assertEquals("successfully performed", $result->message, "Face Detect Single API is not working");
    }
    public function testFaceDetectMulti()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_detect_multi("media/multi_face.jpg","iApp");
      $expect = new api;
      $expect->face_detect_multi("media/multi_face.jpg","iApp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Detect Multi API is not working");
    }

    public function testFaceDetectConfig()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_detect_config("0.5","iApp", "iapp");
      $expect = new api;
      $expect->face_detect_config("0.5","iApp", "iapp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Detect Config API is not working");
    }
}

?>