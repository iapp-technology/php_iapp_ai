<?php 
      ini_set("include_path", "vendor/pear/http_request2/");
      require_once 'HTTP/Request2.php';
      

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class api{

  //  var $apikey;
   public function apikey($apikey){
			
    $GLOBALS['apikey'] = $apikey;
      // return $apikey
   }

   public function idcard_front($filepath){

      $request = new HTTP_Request2();
      $request->setUrl('https://api.iapp.co.th/thai-national-id-card/v3/front');
      $request->setMethod(HTTP_Request2::METHOD_POST);
      $request->setConfig(array(
       'follow_redirects' => TRUE));
      $request->setHeader(array(
       'apikey' => $GLOBALS['apikey']
      ));
      $request->addUpload('file', $filepath, $filepath, '<Content-Type Header>');
      try {
       $response = $request->send();
       if ($response->getStatus() == 200) {
         echo $response->getBody();
       }
       else {
         echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
         $response->getReasonPhrase();
       }
      }
      catch(HTTP_Request2_Exception $e) {
       echo 'Error: ' . $e->getMessage();
      }
   }
   public function idcard_back($filepath){
   
   $request->setUrl('https://api.iapp.co.th/thai-national-id-card/v3/back');
   $request->setMethod(HTTP_Request2::METHOD_POST);
   $request->setConfig(array(
    'follow_redirects' => TRUE
   ));
   $request->setHeader(array(
    'apikey' => $GLOBALS['apikey']
   ));
   $request->addUpload('file', $filepath, $filepath, '<Content-Type Header>');
   try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      echo $response->getBody();
    }
    else {
      echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
      $response->getReasonPhrase();
    }
   }
   catch(HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
   }
  }

  //  public function generate() {
  //     return $this->idcard_front();
  //   }
   
}

?>
