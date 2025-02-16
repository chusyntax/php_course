<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES["file"]["error"] === 0) {
        echo "OK <br>";
    }

    $uploaddir = "uploads/";
    $file_name = basename($_FILES['file']['name']);
    $uploadfile = $uploaddir . $file_name;
    $file_type = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));

    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

    if (!in_array($file_type, $allowed_types)) {
        echo "File type not allowed";
        exit;
    }

    $file_size = $_FILES['file']['size'];

    // echo $file_type . "<br>";
    // if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    //     echo "File is valid, and was successfully uploaded.\n";
    // } else {
    //     echo "Possible file upload attack!\n";
    // }
}
