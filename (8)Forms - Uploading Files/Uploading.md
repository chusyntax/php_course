Uploading step by step (Article)
The Upload Process in Detail

Here’s the step-by-step process of how a file upload happens in PHP:

Client Uploads File:

The user selects a file from their device and submits the form.

The browser encodes the file and sends it to the server as part of the POST request.

File Temporarily Stored on the Server:

The file is stored in a temporary directory on the server.

PHP provides access to the temporary file via the $\_FILES['uploaded_file']['tmp_name'] variable.

The file will remain in this temporary location until the script completes.

Move the File to a Permanent Location:

The temporary file is not saved permanently unless the developer uses the move_uploaded_file() function to move it to a new location on the server.

The move_uploaded_file() function ensures that the uploaded file is safely moved from the temporary location to its final destination.

Temporary File is Deleted:

If the file is not moved or processed, the temporary file is automatically deleted by PHP when the script finishes executing.

Example Process of File Upload
Let's walk through an example of uploading a file:

The user uploads an image (image.jpg).

PHP stores the image temporarily, for example, at /tmp/phpYzdqkD.

The PHP script then uses move_uploaded_file() to move the image from /tmp/phpYzdqkD to the desired destination, such as uploads/image.jpg.

Once the file is moved, the temporary file at /tmp/phpYzdqkD is deleted.

Note:
When you need to upload large files in PHP, you will need to adjust certain settings in the php.ini configuration file. Here are the key directives you should modify:

upload_max_filesize: This directive sets the maximum size allowed for an uploaded file. Increase this to accommodate your file size limits.

upload_max_filesize = 100M; Allow files up to 100MB

This means files up to 100MB can be uploaded.

post_max_size: This directive sets the maximum size of all POST data, including file uploads. Ensure this value is greater than or equal to upload_max_filesize.

post_max_size = 128M ; Allow POST requests up to 128MB

max_execution_time

This setting defines the maximum time (in seconds) a script is allowed to run. Increase this to prevent the script from timing out while processing large uploads.

max_execution_time = 300 ; Allow scripts to run for up to 300 seconds (5 minutes)

max_input_time

This defines the maximum time (in seconds) PHP will spend parsing input data, like POST data. Increase this to ensure large files can be uploaded without the script timing out during input processing.

max_input_time = 300 ; Allow up to 300 seconds for input data to be parsed

memory_limit

This setting defines the maximum amount of memory a script is allowed to use. Ensure this is large enough to handle the uploaded files.

memory_limit = 256M ; Allocate up to 256MB of memory for script execution

max_file_uploads: The maximum number of files that can be uploaded in one request.

max_file_uploads = 20

upload_tmp_dir: Specifies the directory where PHP stores uploaded files temporarily. OPTIONAL

upload_tmp_dir = "/path/to/tmp"

Example Summary:
In your php.ini, you might set the following for handling large file uploads:

upload_max_filesize = 100M
post_max_size = 128M
max_execution_time = 300
max_input_time = 300
memory_limit = 256M

Security Considerations for File Uploads
When handling file uploads, security is critical. Here are a few best practices:

Check the file type: Always validate the file type before saving it. You can do this using mime_content_type() or by checking the file extension.

Limit file size: Ensure that files exceeding a certain size are rejected using the upload_max_filesize directive in php.ini.

Store files securely: Save files in a directory that is not publicly accessible or with proper file permissions to avoid direct access.

Rename files: Avoid storing user-uploaded files with their original names to prevent file overwriting or security issues.
