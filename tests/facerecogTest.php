<?php 

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class facerecogTest extends \PHPUnit\Framework\TestCase{
 
  public function testFaceRecogSingle()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_single("media/face.jpg", "iApp");
      $expect = new api;
      $expect->face_recog_single("media/face.jpg", "iApp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    public function testFaceRecogMulti()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_multi("media/face.jpg", "iApp");
      $expect = new api;
      $expect->face_recog_multi("media/face.jpg", "iApp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }

    public function testFaceRecogFacecrop()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_facecrop("media/face.jpg", "iApp");
      $expect = new api;
      $expect->face_recog_facecrop("media/face.jpg", "iApp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }

    public function testFaceRecogAdd()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_add("media/face.jpg", "iApp", "Panupong", "1234");
      $expect = new api;
      $expect->face_recog_add("media/face.jpg", "iApp", "Panupong", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }

    public function testFaceRecogImport()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_import("media/face.jpg", "iApp", "1234");
      $expect = new api;
      $expect->face_recog_import("media/face.jpg", "iApp", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    public function testFaceRecogCheck()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_check("iApp", "1234");
      $expect = new api;
      $expect->face_recog_check("iApp", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    public function testFaceRecogExport()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_export("iApp", "1234");
      $expect = new api;
      $expect->face_recog_export("iApp", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    public function testFaceRecogRemove()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_remove("iApp", "Panupong","1234","211026", "211026-3" );
      $expect = new api;
      $expect->face_recog_remove("iApp", "Panupong","1234","211026", "211026-3" );
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }

    public function testFaceRecogConfig()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_config("0.5","0.5","iApp", "iapp");
      $expect = new api;
      $expect->face_recog_config("0.5","0.5","iApp", "iapp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
}

?>