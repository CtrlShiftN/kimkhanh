<?php


//$passwordConfirmation = $_POST['password_confirmation'];
//$avatar = $_FILES['avatar'];
//if($avatar['error'] === UPLOAD_ERR_NO_FILE){
//    $errors = $_FILES['avatar'];
//}else{
//    $pathToUpload = "uploads";
//    $fileName = $avatar['name'];
//    if(!file_exists($pathToUpload."$fileName")){
//        mkdir($pathToUpload);
//    }
//}
move_uploaded_file($FILES['fileToUpload']['tmp_name'],'<?= $cdnUrl ?>/img/user.png')
?>