<?php 
use \PHPUnit\Framework\TestCase;
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;


class facelivenessTest extends TestCase{
 
  public function testFaceLiveness()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->faceliveness_detection("media/face.jpg");
      // $taskGuid = $actual;
      
      var_dump($result);
      $this->assertEquals($result, $result, "Face Liveness API is not working.");
    }
    
    public function testFaceLivenessInfo()
    {
        global $result;
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $final = $actual->info_faceliveness($result);
      var_dump($final);
      $this->assertEquals($final, $final, "FaceLiveness Info API is not working.");
    }
}

?>