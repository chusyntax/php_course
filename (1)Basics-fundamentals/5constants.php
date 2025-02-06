<?php

//Constants are declared using the define() function
//Once you declare a constant, you cannot change its value

define("NAME", "John");
echo NAME;

//Can also be declared using the const keyword
const AGE = 25;
echo AGE;

//Magic constants - Are in uppercase. ALso two underscores
echo "It will return current line number: " . __LINE__;
echo '<br>';
echo "It will return full path of file: " . __FILE__;
echo '<br>';
echo "It will return directory of executed file: " . __DIR__;
echo '<br>';
