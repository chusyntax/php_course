<?php

//Cast a variable to a different data type
//String to Integer
$age = "25";
$age = (int)$age;
var_dump($age);

//String to Float
$height = "5.9";
$height = (float)$height;
var_dump($height);

//Integer to String
$age = 25;
$age = (string)$age;
var_dump($age);

//Float to String
$height = 5.9;
$height = (string)$height;
var_dump($height);

//Boolean to Integer
$married = true;
$married = (int)$married;
var_dump($married);

//Integer to Boolean
$age = 25;
$age = (bool)$age;
var_dump($age);

//String to Boolean
$name = "John";
$name = (bool)$name;
var_dump($name);
