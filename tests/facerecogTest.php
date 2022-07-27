<?php 
use \PHPUnit\Framework\TestCase;

ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class facerecogTest extends TestCase{
 
  public function testFaceRecogSingle()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->face_recog_single("media/face.jpg", "Test-PHP-iApp");
      var_dump($result);
      $this->assertEquals("new face saved successfully.", $result->message , "Face Recog Single API is not working.");
    }
    public function testFaceRecogMulti()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_multi("media/face.jpg", "Test-PHP-iApp");
      $expect = new api;
      $expect->face_recog_multi("media/face.jpg", "Test-PHP-iApp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Multi API is not working.");
    }

    public function testFaceRecogFacecrop()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_facecrop("media/face.jpg", "Test-PHP-iApp");
      $expect = new api;
      $expect->face_recog_facecrop("media/face.jpg", "Test-PHP-iApp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Facecrop API is not working.");
    }

    public function testFaceRecogAdd()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_add("media/face.jpg", "Test-PHP-iApp", "Panupong", "1234");
      $expect = new api;
      $expect->face_recog_add("media/face.jpg", "Test-PHP-iApp", "Panupong", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Add API is not working.");
    }

    public function testFaceRecogImport()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_import("media/face.jpg", "Test-PHP-iApp", "1234");
      $expect = new api;
      $expect->face_recog_import("media/face.jpg", "Test-PHP-iApp", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Import API is not working.");
    }
    public function testFaceRecogCheck()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_check("Test-PHP-iApp", "1234");
      $expect = new api;
      $expect->face_recog_check("Test-PHP-iApp", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Check API is not working.");
    }
    public function testFaceRecogExport()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_export("Test-PHP-iApp", "1234");
      $expect = new api;
      $expect->face_recog_export("Test-PHP-iApp", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Export API is not working.");
    }
    public function testFaceRecogRemove()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_remove("Test-PHP-iApp", "Panupong","1234","211026", "211026-3" );
      $expect = new api;
      $expect->face_recog_remove("Test-PHP-iApp", "Panupong","1234","211026", "211026-3" );
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Remove API is not working.");
    }

    public function testFaceRecogConfig()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_recog_config("0.5","0.5","Test-PHP-iApp", "iapp");
      $expect = new api;
      $expect->face_recog_config("0.5","0.5","Test-PHP-iApp", "iapp");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Recog Config API is not working.");
    }
}

?>