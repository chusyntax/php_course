<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
</head>

<body>
    <h2>Upload a file</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br><br>
        <input type="submit" value="Upload File">
    </form>
</body>

</html>