<?php 
// namespace App;

ini_set("include_path", "vendor/pear/http_request2/");
require_once 'HTTP\Request2.php';
require 'vendor\autoload.php';      

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
      // require_once 'vendor\pear\http_request2\HTTP\Request2.php';
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
         return json_encode($response->getBody());
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
      return json_encode($response->getBody());
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
      return json_encode($response->getBody());
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
      return json_encode($response->getBody());
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
        return json_encode($response->getBody());
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
    return json_encode($response->getBody());
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
    return json_encode($response->getBody());
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
    return json_encode($response->getBody());
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
    return json_encode($response->getBody());
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
      return json_encode($response->getBody());
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
public function img_bg_removal($filepath){
  $request = new HTTP_Request2();
  $request->setUrl('https://api.iapp.co.th/face-extractor/predict');
  $request->setMethod(HTTP_Request2::METHOD_POST);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
 
  $request->setHeader(array(
    'apikey' => $GLOBALS['apikey']
  ));

  $request->addPostParameter(array(
    "rotateIfPortiat" => true, 
    "content" => $filepath  
  ));

  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      return json_encode($response->getBody());
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

public function thai_qa(){
  $request = new HTTP_Request2();
  $request->setUrl('https://api.iapp.co.th/thai-qa/inference');
  $request->setMethod(HTTP_Request2::METHOD_POST);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
 
  $request->setHeader(array(
    'apikey' => $GLOBALS['apikey']
  ));

  $request->addPostParameter(array(
    "question" => "แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่",  
    "document" => "จังหวัดแค็วม์โปแลนด์ wojewdztwochemskie คือหน่วยการปกครองท้องถิ่นของประเทศโปแลนด์ในช่วงปี ค.ศ.1975 - ค.ศ.1998 จังหวัดได้รับการรวมเข้ากับจังหวัดลูบลินมีเมืองหลักคือแค็วม์ใน ปี ค.ศ.1998 มีพื้นที่ประมาณ 3865 ตารางกิโลเมตรและมีประชากร 248800 คน"
));

  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      return json_encode($response->getBody());
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

function thai_qgen($text){
  $request = new HTTP_Request2();
  $request->setUrl('http://api.iapp.co.th/qa-generator-th?text='.$text.'&apikey='.$GLOBALS['apikey']);
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
      return json_encode($response->getBody());
    }
    else {
      echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
      $response->getReasonPhrase();
    }
  }
  catch(HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
  }
//


// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'http://api.iapp.co.th/qa-generator-th?text=ผมพูดภาษาไทย&apikey=eufbCBjpYMaNbComOEycc52rX6ZqhbbN',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// return $response;

}

public function thai_text_sum($text, $output_length){
  $request = new HTTP_Request2();
  $request->setUrl('https://api.iapp.co.th/text-summarization?text='.$text.'&output_length='.$output_length);
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
      return json_encode($response->getBody());
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

public function face_ver1($filepath1, $filepath2, $company_name, $min_score){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/face_compare');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));

// Use default score
$request->addUpload('file1', $filepath1, $filepath1, '<Content-Type Header>');
$request->addUpload('file2', $filepath2, $filepath2, '<Content-Type Header>');

// Use score of each company
$request->addUpload('file1', $filepath1, $filepath1, '<Content-Type Header>');
$request->addUpload('file2', $filepath2, $filepath2, '<Content-Type Header>');
$request->addPostParameter(array(
  'company' => $company_name 
));

// Use score of each company
$request->addUpload('file1', $filepath1, $filepath1, '<Content-Type Header>');
$request->addUpload('file2', $filepath2, $filepath2, '<Content-Type Header>');
$request->addPostParameter(array(
  'min_score' => $min_score
));

try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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

public function face_ver1_config($detect_val, $compare_val, $company_name, $password){
$request = new HTTP_Request2();

// Configure Score
$request->setUrl('https://api.iapp.co.th/face_config_score?detection='.$detect_val.'&comparison='.$compare_val.'&company='.$company_name.'&password='.$password);

// Show Score
$request->setUrl('https://api.iapp.co.th/face_config_score?detection&comparison&company='.$company_name.'&password='.$password);

$request->setMethod(HTTP_Request2::METHOD_GET);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' =>  $GLOBALS['apikey']
));
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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

public function face_ver2($filepath1, $filepath2){
  $request = new HTTP_Request2();
  $request->setUrl('https://api.iapp.co.th/face-verification/v2/face_compare');
  $request->setMethod(HTTP_Request2::METHOD_POST);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'apikey' => $GLOBALS['apikey']
  ));
  $request->addUpload('file1', $filepath1, $filepath1, '<Content-Type Header>');
  $request->addUpload('file2', $filepath2, $filepath2, '<Content-Type Header>');
  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      return json_encode($response->getBody());
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
      return json_encode($response->getBody());
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
      return json_encode($response->getBody());
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

public function face_detect_config($detect_val,$company_name, $password ){
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
    return json_encode($response->getBody());
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

public function face_recog_single($filepath, $company_name){
  $request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/face_recog_single');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));
$request->addPostParameter(array(
  'company' => $company_name
));
$request->addUpload('file', $filepath, $filepath, '<Content-Type Header>');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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


public function face_recog_multi($filepath, $company_name){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/face_recog_multi');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));
$request->addPostParameter(array(
  'company' => $company_name
));
$request->addUpload('file', $filepath, $filepath, '<Content-Type Header>');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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

public function face_recog_facecrop($filepath, $company_name){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/face_recog_facecrop');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));
$request->addPostParameter(array(
  'company' => $company_name
));
$request->addUpload('file', $filepath, $filepath, '<Content-Type Header>');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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

public function face_recog_add($filepath, $company_name, $name, $password){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/face_recog_add');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));
$request->addPostParameter(array(
  'company' => $company_name,
  'name' => $name,
  'password' => $password
));
$request->addUpload('file', $filepath, '<Content-Type Header>');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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


public function face_recog_import($filepath, $company_name, $password){
$request = new HTTP_Request2();
$request->setUrl('https://api.iapp.co.th/face_recog_import');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' => $GLOBALS['apikey']
));
$request->addPostParameter(array(
  'company' => $company_name,
  'password' => $password
));
$request->addUpload('file', $filepath, $filepath, '<Content-Type Header>');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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

public function face_recog_check($company_name, $password){
$request = new HTTP_Request2();

// None Save File
$request->setUrl('https://api.iapp.co.th/face_recog_check?company='.$company_name.'&password='.$password);

// Save File
$request->setUrl('https://api.iapp.co.th/face_recog_check?company='.$company_name.'&password='.$password.'&save_file');

$request->setMethod(HTTP_Request2::METHOD_GET);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'apikey' =>  $GLOBALS['apikey']
));
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    return json_encode($response->getBody());
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

public function face_recog_export($company_name, $password){
 
  $request = new HTTP_Request2();
  
  // Save CSV File
  $request->setUrl('https://api.iapp.co.th/face_recog_export?company='.$company_name.'&type_file=csv&password='.$password);
  
  // Save Excel File
  $request->setUrl('https://api.iapp.co.th/face_recog_export?company='.$company_name.'&type_file=excel&password='.$password);
  
  $request->setMethod(HTTP_Request2::METHOD_GET);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'apikey' =>  $GLOBALS['apikey']
  ));
  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      return json_encode($response->getBody());
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

public function face_recog_remove($company_name, $name, $password, $date, $date_faceid){

  $request = new HTTP_Request2();
  
  // Remove All Face of This Person name
  $request->setUrl('https://api.iapp.co.th/face_recog_remove?company='.$company_name.'&name='.$name.'&password='.$password);
  
  // Remove All Face of This Person Name in This Date
  $request->setUrl('https://api.iapp.co.th/face_recog_remove?company='.$company_name.'&name='.$name.'&password='.$password.'&face_id='.$date);
  
  // Remove Only Face of This Person Name By and This Face ID
  $request->setUrl('https://api.iapp.co.th/face_recog_remove?company='.$company_name.'&name='.$name.'&password='.$password.'&face_id='.$date_faceid);
    
  $request->setMethod(HTTP_Request2::METHOD_GET);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'apikey' =>  $GLOBALS['apikey']
  ));
  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      return json_encode($response->getBody());
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

public function face_recog_config($detect_val, $recog_val, $company_name,$password){
  $request = new HTTP_Request2();
  
  // Configure Score
  $request->setUrl('https://api.iapp.co.th/face_config_score?detection='.$detect_val.'&recognition='.$recog_val.'&company='.$company_name.'&password='.$password);
  
  // Show Score
  $request->setUrl('https://api.iapp.co.th/face_config_score?detection&recognition&company='.$company_name.'&password='.$password);
  
  $request->setMethod(HTTP_Request2::METHOD_GET);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'apikey' =>  $GLOBALS['apikey']
  ));
  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      return json_encode($response->getBody());
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






}
?>
