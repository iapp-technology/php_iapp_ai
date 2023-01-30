<?php
// namespace App;

ini_set("include_path", "iapp-php-composer");
require_once 'iapp-php-composer/module_api.php';

################### API KEY ####################

$object = new api;
$object->apikey("XXX Your API Key XXX");

################### Image Recognition ####################

$res_idFront = $object->idcard_front("media/id-card-front.jpg");
var_dump($res_idFront);

$res_idPhotocopied = $object->idcard_front_photocopied("media/copy_of_thai_idcard_trial.png");
var_dump($res_idPhotocopied);

$res_idBack = $object->idcard_back("media/id-card-back.jpg");
var_dump($res_idBack);

$res_lpr = $object->license_plate_ocr("media/plate.jpg");
var_dump($res_lpr);

$res_driverCard = $object->driver_license("media/driver_card.png");
var_dump($res_driverCard);

$res_bookBank = $object->bookbank_ocr("media/bookbank_axample.png");
var_dump($res_bookBank);

$res_passport = $object->passport_ocr("media/thai-passport.jpeg");
var_dump($res_passport);

$res_doc_PlainText = $object->document_ocr_plaintext("media/pdf01.pdf");
var_dump($res_doc_PlainText);

$res_doc_json = $object->document_ocr_json_layout("media/pdf01.pdf");
var_dump($res_doc_json);

$res_docx = $object->document_ocr_docx("media/pdf01.pdf");
var_dump($res_docx);

$res_waterOcr = $object->water_file_ocr("media/water-meter.jpg");
var_dump($res_waterOcr);

$res_removeBg = $object->img_bg_removal("media/face.jpg");
var_dump($res_removeBg);

$taskGuid =$object->faceliveness_detection("media/face.jpg");
var_dump($taskGuid);
$status = NULL;
while($status == NULL){
    $resp = $object->info_faceliveness($taskGuid);
    $obj = json_decode($resp);
    $tmp  = (object)$obj;
    $status = $tmp ->status;
    if ($status == "C"){
      var_dump($tmp);
      return $tmp;
     }
}

$res_faceV = $object->face_ver1("media/face.jpg", "media/face.jpg", "", "");
var_dump($res_faceV);

$res_faceV_config = $object->face_ver1_config("0.5", "0.5", "iApp", "iApp");
var_dump($res_faceV_config);

$res_faceV2 = $object->face_ver2("media/face.jpg", "media/face.jpg");
var_dump($res_faceV2);

$res_faceD_single = $object->face_detect_single("media/face.jpg");
var_dump($res_faceD);

$res_faceD_multi = $object->face_detect_multi("media/multi_face.jpg","iApp");
var_dump($res_faceD_multi);

$res_faceD_config = $object->face_detect_config("iApp", "iApp");
var_dump($res_faceD_config);

$res_faceRec_single = $object->face_recog_single("media/face.jpg", "iApp");
var_dump($res_faceRec_single);

$res_faceRec_multi = $object->face_recog_multi("media/face.jpg", "iApp");
var_dump($res_faceRec_multi);

$res_faceRec_facecrop = $object->face_recog_facecrop("media/face.jpg", "iApp");
var_dump($res_faceRec_facecrop);

$res_faceRec_add = $object->face_recog_add("media/face.jpg", "iApp", "Sam", "iApp");
var_dump($res_faceRec_add);

$res_faceRec_import = $object->face_recog_import("media/import.csv", "iApp", "iApp");
var_dump($res_faceRec_import);

$res_faceRec_check = $object->face_recog_check("iApp", "iApp");
var_dump($res_faceRec_check);

$res_faceRec_export = $object->face_recog_export("iApp", "csv","iApp");
var_dump($res_faceRec_export);

$res_faceRec_remove = $object->face_recog_remove("iApp", "Panupong","iApp","211026-3" );
var_dump($res_faceRec_remove);

$res_faceRec_config = $object->face_recog_config("0.5","0.5","iApp", "iApp");
var_dump($res_faceRec_config);

################### Thai Natural Language Processing ####################

$res_qa = $object->thai_qa("แค็วม์เป็นแค่หมู่บ้านใช่หรือไม่", "จังหวัดแค็วม์โปแลนด์ wojewdztwochemskie คือหน่วยการปกครองท้องถิ่นของประเทศโปแลนด์ในช่วงปี ค.ศ.1975 - ค.ศ.1998 จังหวัดได้รับการรวมเข้ากับจังหวัดลูบลินมีเมืองหลักคือแค็วม์ใน ปี ค.ศ.1998 มีพื้นที่ประมาณ 3865 ตารางกิโลเมตรและมีประชากร 248800 คน");
var_dump($res_qa);

$res_qgen = $object->thai_qgen("ไพธอนเป็นภาษาการเขียนโปรแกรมที่มีการตีความระดับสูงและมีวัตถุประสงค์ทั่วไป ภาษาคอมพิวเตอร์นี้สร้างโดย Guido van Rossum และเปิดตัวครั้งแรกในปี 1991 ปรัชญาการออกแบบของ ไพธอนคือเน้นรหัสในการอ่านด้วยการใช้ตัวอักษรช่องว่าง");
var_dump($res_qgen);

$res_textSum = $object->thai_text_sum("พล.อ.ประยุทธ์ จันทร์โอชา นายกรัฐมนตรีและรัฐมนตรีว่าการกระทรวงกลาโหม กล่าวถึงกระแสข่าววิพากษ์วิจารณ์นายกรัฐมนตรี อ่านกระดาษเปล่าบนเครื่องบินระหว่างเดินทางมาประเทศญี่ปุ่น ว่า แค่นายกรัฐมนตรีอ่านหนังสือยังนำรูปไปวิพากษ์วิจารณ์ได้ กล่าวหาว่าแทนที่จะอ่านหนังสือเตรียมประชุม ทั้งที่ความจริงหนังสือที่หยิบมาอ่านนั้น เป็นหนังสือของสายการบินที่วางไว้ จึงหยิบขึ้นมาดูเท่านั้น", '84');
var_dump($res_textSum);

$res_translation = $object->eng_thai_translation("ผมพูดภาษาไทย");
var_dump($res_translation);

################### Voice and Speech ####################

$res_asr = $object->asr("media/2ppl.wav");
var_dump($res_asr);

$res_tts_kaitom = $object->kaitom_tts("ไพธอนเป็นภาษาการเขียนโปรแกรมที่มีการตีความระดับ");
$myfile = fopen("media/kaitom.wav", "w") or die("Unable to open file!");
fwrite($myfile, $res_tts_kaitom);
fclose($myfile);

$res_tts_cee = $object->cee_tts("อ่านกระดาษเปล่าบนเครื่องบินระหว่างเดินทางมาประเทศญี่ปุ่น");
$myfile = fopen("media/cee.wav", "w") or die("Unable to open file!");
fwrite($myfile, $res_tts_cee);
fclose($myfile);


?> 
