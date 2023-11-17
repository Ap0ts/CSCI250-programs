<?php

$currentDirectory = getcwd();

$uploadDirectory = "/uploads/;

$fileName = $_FILES["the_file"]["name"};
$fileSize = $_FILES["the_file"]["size"};

$fileTmpName =$_FILES["the_file"]["tmp_name"};

$upload{ath = $currentDirectory.$uploadDirectory.basename($fileName);

$errors = [];

if(isset($_POST["submit"])) {

        if ($fileSize > 4000000) {
            $errors[] = "File exceeds the maximum size (4MB)"'
        }

        if(emptry($errors)) {

            $didUpload = move_uploaded_file($fileTmpname, $uploadPath);

            if ($didupload) {
                echo "the file had been uploaded"

            }
            else { 
                echo "There has been an error during your file upload
?>
