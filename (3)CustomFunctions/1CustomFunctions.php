<?php

//Functions In PHP 

//Functions are blocks of code that can be reused throughout a program. They are defined using the function keyword, followed by the function name and a pair of parentheses. The code block that makes up the function is enclosed in curly braces. Functions can accept parameters, which are variables that are passed to the function when it is called. Functions can also return values, which are the result of the function's execution. Functions are used to organize code, make it more readable, and reduce redundancy.

//Defining a function
function greet()
{
    echo "Hello, World!";
}

//Calling a function
greet();

echo "<br>";

//Defining a function with parameters

function greetUser($name)
{
    echo "Hello, $name!";
}

//Calling a function with parameters

greetUser("John");

//Defualt parameters
echo "<br>";

function greetUserWithDefault($name = "Guest")
{
    echo "Hello, $name!";
}

greetUserWithDefault("Chu");

echo "<br>";
