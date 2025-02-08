<?php

// $file_name = "data.txt";

// $file = fopen($file_name, "r");

// if ($file) {
//     $content = fread($file, filesize($file_name));
//     echo nl2br($content);
//     fclose($file);
// } else {
//     echo "Error opening file";
// }


$content = file_get_contents("data.txt");
echo nl2br($content);


$file = fopen("data.txt", "a");

if ($file) {
    fwrite($file, "Hello World Again");
    fclose($file);
    echo "File written successfully";
} else {
    echo "Error opening file";
}


$old_file = "data.txt";
$new_file = "data2.txt";

if (file_exists($old_file)) {
    rename($old_file, $new_file);
    echo "File renamed successfully";
    // use unlink() to delete file
} else {
    echo "Error renaming file";
}

$directory = "uploads";
// Creating a directory if it does not exist
if (!file_exists($directory)) {

    mkdir($directory, 0777, true);

    echo "Directory created";
} else {

    echo "Directory already exists";
}
