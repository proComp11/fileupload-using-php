<?php

session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$allowTypes = array('jpg', 'png', 'jpeg', 'gif'); 
if(isset($_POST['submit'])){
    
    if (file_exists($target_file)) {
    
        $_SESSION['errMsg1'] = 'Sorry, file already exists.';
        $uploadOk = 0;
    }else if($_FILES["fileToUpload"]["size"] > 500000) {
        
        $uploadOk = 0;
        $_SESSION['errMsg2'] ='Sorry, your file is too large.' ;
    }else if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif'){
        
        $_SESSION['errMsg3'] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
        $uploadOk = 0;
    }

    if($uploadOk == 1){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $_SESSION['msgSucc'] = 'The file has been uploaded.';
        } else {
            $_SESSION['msgSucc'] = 'Sorry, there was an error uploading your file.';
        }
    }
    
    header('Location: uploadaview.php');
}
?>