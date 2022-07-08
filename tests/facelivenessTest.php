<?php 
use \PHPUnit\Framework\TestCase;
ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class facelivenessTest extends TestCase{
 
  public function testFaceLiveness()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->faceliveness_detection("media/face.jpg");
      $taskGuid = $actual;
      $expect = new api;
      $expect->faceliveness_detection("media/face.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "Face Liveness API is not working.");
    }
    
    public function testFaceLivenessInfo()
    {
        global $taskGuid;
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->info_faceliveness($taskGuid);
      $expect = new api;
      $expect->info_faceliveness($taskGuid);
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "FaceLiveness Info API is not working.");
    }
}

?>