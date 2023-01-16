<?php
// namespace App;

ini_set("include_path", "iapp-php-composer");
require_once 'iapp-php-composer/module_api.php';

################### API KEY ####################

$object = new api;
// $object->apikey("XXX Your API Key XXX");
$object->apikey("rL3eZA5M3Or78dKgYWtXh3EDylXpao68");

################### Image Recognition ####################

// $object->idcard_front("media/id-card-front.jpg");
// $object->idcard_front_photocopied("media/copy_of_thai_idcard_trial.png");
// $object->idcard_back("media/id-card-back.jpg");

// $object->license_plate_ocr("media/plate.jpg");
// $object->license_plate_base64("media/plate.txt");

// $object->driver_license("media/driver_card.png");
// $object->bookbank_ocr("/Users/iapp/php_iapp_ai/media/bookbank_axample.png");
// $object->passport_ocr("/Users/iapp/php_iapp_ai/media/thai-passport.jpeg");
// $object->document_ocr_plaintext("/Users/iapp/php_iapp_ai/media/pdf01.pdf");
// $object->document_ocr_json_layout("/Users/iapp/php_iapp_ai/media/pdf01.pdf");
// $object->document_ocr_docx("/Users/iapp/php_iapp_ai/media/pdf01.pdf");
// $object->signature_detection("media/signature.jpg");
// $object->water_file_ocr("media/water-meter.jpg");
// $object->water_base64_ocr("media/water-meter.txt");

// $object->power_ocr("media/power.txt");

// $object->img_bg_removal("media/face.jpg");
// $object->img_bg_removal("media/base64.txt");

// $taskGuid =$object->faceliveness_detection("media/face.jpg");
// var_dump($taskGuid);
// print_r($object->info_faceliveness("e85d0230-2960-46b3-81b6-ab3aefc20b87"));
// $status = NULL;
// while($status == NULL){
//     $resp = $object->info_faceliveness($taskGuid);
//     $obj = json_decode($resp);
//     $tmp  = (object)$obj;
//     $status = $tmp ->status;
//     if ($status == "C"){
//         var_dump($tmp);
//         return $tmp;
//     }
        
//   }

// $object->face_ver1("media/face.jpg", "media/face.jpg", "", "");
// $object->face_ver1_config("0.5", "0.5", "iApp", "iApp");
// $object->face_ver2("media/face.jpg", "media/face.jpg");
// $object->face_detect_single("media/face.jpg");
// $object->face_detect_multi("media/multi_face.jpg","iApp");
// $object->face_detect_config("iApp", "iApp");
// $object->face_recog_single("media/face.jpg", "iApp");
// $object->face_recog_multi("media/face.jpg", "iApp");
// $object->face_recog_facecrop("media/face.jpg", "iApp");
// $object->face_recog_add("media/face.jpg", "iApp", "Sam", "iApp");
// $object->face_recog_import("media/import.csv", "iApp", "iApp");
// $object->face_recog_check("iApp", "iApp");
// $object->face_recog_export("iApp", "csv","iApp");
// $object->face_recog_remove("iApp", "Panupong","iApp","211026-3" );
// $object->face_recog_config("0.5","0.5","iApp", "iApp");

################### Thai Natural Language Processing ####################

// $object->thai_qa("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่", "จังหวัดแค็วม์โปแลนด์ wojewdztwochemskie คือหน่วยการปกครองท้องถิ่นของประเทศโปแลนด์ในช่วงปี ค.ศ.1975 - ค.ศ.1998 จังหวัดได้รับการรวมเข้ากับจังหวัดลูบลินมีเมืองหลักคือแค็วม์ใน ปี ค.ศ.1998 มีพื้นที่ประมาณ 3865 ตารางกิโลเมตรและมีประชากร 248800 คน");

// $object->thai_qgen("ไพธอนเป็นภาษาการเขียนโปรแกรมที่มีการตีความระดับสูงและมีวัตถุประสงค์ทั่วไป ภาษาคอมพิวเตอร์นี้สร้างโดย Guido van Rossum และเปิดตัวครั้งแรกในปี 1991 ปรัชญาการออกแบบของ ไพธอนคือเน้นรหัสในการอ่านด้วยการใช้ตัวอักษรช่องว่าง");

// $object->thai_text_sum("พล.อ.ประยุทธ์ จันทร์โอชา นายกรัฐมนตรีและรัฐมนตรีว่าการกระทรวงกลาโหม กล่าวถึงกระแสข่าววิพากษ์วิจารณ์นายกรัฐมนตรี อ่านกระดาษเปล่าบนเครื่องบินระหว่างเดินทางมาประเทศญี่ปุ่น ว่า แค่นายกรัฐมนตรีอ่านหนังสือยังนำรูปไปวิพากษ์วิจารณ์ได้ กล่าวหาว่าแทนที่จะอ่านหนังสือเตรียมประชุม ทั้งที่ความจริงหนังสือที่หยิบมาอ่านนั้น เป็นหนังสือของสายการบินที่วางไว้ จึงหยิบขึ้นมาดูเท่านั้น", '84');

// $object->eng_thai_translation("ผมพูดภาษาไทย");

################### Voice and Speech ####################

// $object->asr("media/2ppl.wav");

// $res = $object->kaitom_tts("ไพธอนเป็นภาษาการเขียนโปรแกรมที่มีการตีความระดับ");
// $myfile = fopen("media/kaitom.wav", "w") or die("Unable to open file!");
// fwrite($myfile, $res);
// fclose($myfile);

// $res = $object->cee_tts("อ่านกระดาษเปล่าบนเครื่องบินระหว่างเดินทางมาประเทศญี่ปุ่น");
// $myfile = fopen("media/cee.wav", "w") or die("Unable to open file!");
// fwrite($myfile, $res);
// fclose($myfile);
################### Optimization and Prediction ####################
// Available Soon








?> 