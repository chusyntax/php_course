<?php

//Cookies in PHP
//Cookies are small files that are stored on a user's computer. They are designed to hold a modest amount of data specific to a particular client and website, and can be accessed either by the web server or the client computer. This allows the server to deliver a page tailored to a particular user, or the page itself can contain some script which is aware of the data in the cookie and so is able to carry information from one visit to the website (or related site) to the next.


//Setting Cookies
//Cookies are set using the setcookie() function. This function requires at least two parameters: the name of the cookie and the value to be stored in the cookie. The following example sets a cookie named "user" with the value "John Doe":
setcookie("user", "John Doe", time() + 3600, "/");

//In this example, the cookie will expire after one hour (3600 seconds). The "/" means that the cookie is available in the entire website.

//Getting Cookies Values
//To get the value of a cookie, you can use the $_COOKIE superglobal array. The following example shows how to get the value of the "user" cookie:
echo $_COOKIE["user"];
//This will output "John Doe" if the cookie is set.

//Check if Cookies are Enabled
//To check if cookies are enabled in the user's browser, you can use the isset() function to check if the cookie is set. The following example checks if the "user" cookie is set:
if (isset($_COOKIE["user"])) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}

//Deleting Cookies
//To delete a cookie, you can set the cookie with an expiration date in the past. The following example deletes the "user" cookie:
setcookie("user", "", time() - 3600, "/");
//This will delete the "user" cookie by setting its expiration date to one hour ago.

//Cookie Parameters
//The setcookie() function can take several optional parameters to customize the behavior of the cookie. Some of the common parameters are:
//1. Expiration Date: The expiration date of the cookie in Unix timestamp format. If not specified, the cookie will expire when the browser is closed.
//2. Path: The path on the server in which the cookie will be available. If not specified, the cookie will be available in the entire domain.
//3. Domain: The domain that the cookie is available to. If not specified, the cookie will be available to the domain of the current page.
//4. Secure: Indicates if the cookie should only be transmitted over a secure HTTPS connection.
//5. HttpOnly: Indicates if the cookie should be accessible only through the HTTP protocol and not through JavaScript.

//Example of setting a cookie with custom parameters:
setcookie("user", "John Doe", time() + 3600, "/", "example.com", true, true);
//This sets a cookie named "user" with the value "John Doe" that will expire after one hour, is available in the entire domain "example.com", is secure, and is accessible only through HTTP.