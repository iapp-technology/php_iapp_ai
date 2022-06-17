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
    $request = new HTTP_Request2();
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

  public function license_plate($filepath){
    $request = new HTTP_Request2();
    $request->setUrl('https://api.iapp.co.th/license-plate-recognition/file');
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

   public function bookbank_ocr($filepath){
    $request = new HTTP_Request2();
    $request->setUrl('https://api.iapp.co.th/book-bank-ocr/file');
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
   
   public function faceliveness_detection($filepath){
    $request = new HTTP_Request2();
    $request->setUrl('https://api.iapp.co.th/passive-face-liveness-detection');
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
       return $response->getBody();
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

   public function info_faceliveness($taskGuid){
    $request = new HTTP_Request2();
    $url = 'https://api.iapp.co.th/passive-face-liveness-detection/'.trim($taskGuid,'"');
    $request->setUrl($url);
    $request->setMethod(HTTP_Request2::METHOD_GET);
    $request->setConfig(array(
     'follow_redirects' => TRUE
    ));
    $request->setHeader(array(
     'apikey' => $GLOBALS['apikey']
    ));
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

  public function signature_detection($filepath){
    $request = new HTTP_Request2();
    $request->setUrl('https://api.iapp.co.th/book-bank-ocr/file');
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

public function water_file_ocr($filepath){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/meter-number-ocr/file');
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


public function water_base64_ocr($filepath){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/meter-number-ocr/base64');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' =>  $GLOBALS['apikey']
));
$base64 = fopen($filepath,"r");
fclose($base64);
$request->setBody($base64);

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

public function asr($filepath){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/asr');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' =>  $GLOBALS['apikey']
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

public function kaitom_tts($text){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/thai-tts-kaitom/tts?text=' .$text);
$request->setMethod(HTTP_Request2::METHOD_GET);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));
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

public function cee_tts($text){
  $request = new HTTP_Request2();
  $request->setUrl('https://api.iapp.co.th/thai-tts-cee/tts?text=' .$text);
  $request->setMethod(HTTP_Request2::METHOD_GET);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'apikey' => $GLOBALS['apikey']
  ));
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
public function img_bg_removal($filepath){}

public function thai_qa($question, $document){}

public function thai_qgen($text){}

public function face_verification($filepath){}

public function face_detect_single($filepath, $company_name ){
  $request = new HTTP_Request2();
  $request->setUrl('https://api.iapp.co.th/face_detect_single');
  $request->setMethod(HTTP_Request2::METHOD_POST);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'apikey' => $GLOBALS['apikey']
  ));

  // Use score of each company
  $request->addPostParameter(array(
    'company' => $company_name 
  ));

  // Use default score
  //$request->addPostParameter(array(
  //  'company' => '{Your Company Name}' 
  //));

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

public function face_detect_multi($filepath, $company_name){
  $request = new HTTP_Request2();
  $request->setUrl('https://api.iapp.co.th/face_detect_multi');
  $request->setMethod(HTTP_Request2::METHOD_POST);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'apikey' =>  $GLOBALS['apikey']
  ));

  // Use score of each company
  $request->addPostParameter(array(
    'company' => $company_name 
  ));

  // Use default score
  //$request->addPostParameter(array(
  //  'company' => '{Your Company Name}'
  //));

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

public function face_detection_tool($detect_val,$company_name, $password ){
$request = new HTTP_Request2();

// Configure Score
$url1 = 'https://api.iapp.co.th/face_config_score?detection='.$detect_val.'&company='.$company_name.'&password='.$password;
$request->setUrl($url1);

// Show Score
$url2 = 'https://api.iapp.co.th/face_config_score?detection&company='.$company_name.'&password='.$password;
$request->setUrl($url2);

$request->setMethod(HTTP_Request2::METHOD_GET);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));
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

public function face_recognition($filepath){}





}
?>
