<?php

//Super Globals
//Super globals are built-in variables in PHP that are always available, regardless of scope. They are used to access global variables from any part of the PHP script. PHP super globals are used to collect form data, track cookies, and more. There are several super globals in PHP, including $_GET, $_POST, $_REQUEST, $_COOKIE, $_SESSION, $_SERVER, $_ENV, $_FILES, and $GLOBALS.

//$_GET
//The $_GET super global is used to collect form data after submitting an HTML form with the method="get". Data sent with the GET method is visible to everyone in the URL. The $_GET super global is an associative array that stores the form data submitted in the URL.

//Example of using $_GET
// <form method="get" action="form.php">
//     Name: <input type="text" name="name">
//     <input type="submit">
// </form>
//
// <?php
// if (isset($_GET['name'])) {
//     $name = $_GET['name'];
//     echo "Hello, $name!";
// }
// 

//$_POST
//The $_POST super global is used to collect form data after submitting an HTML form with the method="post". Data sent with the POST method is not visible in the URL. The $_POST super global is an associative array that stores the form data submitted in the HTTP request body.

//Example of using $_POST
// <form method="post" action="form.php">
//     Name: <input type="text" name="name">
//     <input type="submit">
// </form>
//
// <?php
// if (isset($_POST['name'])) {
//     $name = $_POST['name'];
//     echo "Hello, $name!";
// }
//

//$_REQUEST
//The $_REQUEST super global is used to collect form data after submitting an HTML form. The $_REQUEST super global can collect data sent with both the GET and POST methods. The $_REQUEST super global is an associative array that stores the form data submitted in the URL or the HTTP request body.

//Example of using $_REQUEST
// <form method="post" action="form.php">
//     Name: <input type="text" name="name">
//     <input type="submit">
// </form>
//
// <?php
// if (isset($_REQUEST['name'])) {
//     $name = $_REQUEST['name'];
//     echo "Hello, $name!";
// }
//

//$_COOKIE
//The $_COOKIE super global is used to collect cookie data sent by the client browser. Cookies are small pieces of data stored on the client's computer that are sent with each HTTP request. The $_COOKIE super global is an associative array that stores the cookie data sent by the client browser.

//Example of using $_COOKIE
// setcookie("name", "John", time() + 3600, "/");
//
// if (isset($_COOKIE['name'])) {
//     $name = $_COOKIE['name'];
//     echo "Hello, $name!";
// }
//

//$_SESSION
//The $_SESSION super global is used to collect session data stored on the server. Sessions are used to store data across multiple pages during a user's visit to a website. The $_SESSION super global is an associative array that stores the session data created by the server.

//Example of using $_SESSION
// session_start();
//
// $_SESSION['name'] = "John";
//
// if (isset($_SESSION['name'])) {
//     $name = $_SESSION['name'];
//     echo "Hello, $name!";
// }
//

//$_SERVER
//The $_SERVER super global is used to collect server-related information in PHP. The $_SERVER super global is an associative array that stores information about the server, such as the server name, request method, and user agent.

//Example of using $_SERVER
// echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
// echo "Request method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
// echo "User agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
//

//$_ENV
//The $_ENV super global is used to collect environment variables in PHP. Environment variables are system-specific variables that are accessible to all programs running on the server. The $_ENV super global is an associative array that stores the environment variables available to the PHP script.

//Example of using $_ENV
// echo "Path: " . $_ENV['PATH'] . "<br
//

//$_FILES
//The $_FILES super global is used to collect file upload data in PHP. File uploads are used to upload files from the client's computer to the server. The $_FILES super global is a multidimensional associative array that stores information about the uploaded files, such as the file name, file type, and file size.

//Example of using $_FILES
// <form method="post" action="upload.php" enctype="multipart/form-data">
//     Select file to upload:
//     <input type="file" name="fileToUpload" id="fileToUpload">
//     <input type="submit" value="Upload File" name="submit">
// </form>

// <?php
// if (isset($_FILES['fileToUpload'])) {
//     $file = $_FILES['fileToUpload'];
//     echo "File name: " . $file['name'] . "<br>";
//     echo "File type: " . $file['type'] . "<br>";
//     echo "File size: " . $file['size'] . "<br>";
// }
//

//$GLOBALS
//The $GLOBALS super global is used to access global variables from any part of the PHP script. The $GLOBALS super global is an associative array that stores global variables as key-value pairs.

//Example of using $GLOBALS
// $x = 10;
// $y = 20;
//
// function add()
// {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
//
// add();
// echo "The sum of x and y is: " . $z;
//
