<?php 

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class facedetectTest extends \PHPUnit\Framework\TestCase{
 
  public function testFaceDetectSingle()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_detect_single("media/face.jpg","iApp");
      $expect = new api;
      $expect->face_detect_single("media/face.jpg","iApp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
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
      $this->assertEquals($expect, $actual, "True");
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
      $this->assertEquals($expect, $actual, "True");
    }
}

?>