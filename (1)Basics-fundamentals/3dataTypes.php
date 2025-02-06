<?php

//Data types in PHP
//String
$name = "John";
var_dump($name);

//Integer
$age = 25;
var_dump($age);

//Float
$height = 5.9;
var_dump($height);

//Boolean
$married = true;
var_dump($married);

//Array
$names = array("John", "Jane", "Doe");
var_dump($names);

//Object
class Person
{
    public $name;
    public $age;
    public $married;
}

$person = new Person();
$person->name = "John";
$person->age = 25;
$person->married = true;
var_dump($person);

//NULL
$null = NULL;
var_dump($null);

//Resource
$file = fopen("3dataTypes.php", "r");
var_dump($file);
