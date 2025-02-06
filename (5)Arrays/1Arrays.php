<?php

//Arrays
//An array is a data structure that stores one or more similar type of values in a single variable. Each value in an array is called an element, and each element is accessed by its index. Arrays in PHP can hold different types of values, such as integers, strings, and objects. Arrays can be indexed or associative, and they can be multidimensional.

//Indexed Arrays
//Indexed arrays are arrays with numeric indexes. The index of the first element in an indexed array is 0, the index of the second element is 1, and so on. Indexed arrays are created using the array() function or the square bracket syntax []. Elements in an indexed array can be accessed using their index.

//Creating an indexed array using the array() function
$fruits = array("Apple", "Banana", "Orange", "Mango");

//Accessing elements in an indexed array
echo "The first fruit is: " . $fruits[0] . "<br>";
echo "The second fruit is: " . $fruits[1] . "<br>";

//Creating an indexed array using the square bracket syntax
$colors = ["Red", "Green", "Blue", "Yellow"];

//Accessing elements in an indexed array
echo "The first color is: " . $colors[0] . "<br>";
echo "The second color is: " . $colors[1] . "<br>";

//Associative Arrays
//Associative arrays are arrays with named keys. Each element in an associative array is associated with a key-value pair. The key is a string that identifies the element, and the value is the data associated with the key. Associative arrays are created using the array() function or the square bracket syntax []. Elements in an associative array can be accessed using their key.

//Creating an associative array using the array() function
$person = array("name" => "John", "age" => 30, "city" => "New York");

//Accessing elements in an associative array
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";

//Creating an associative array using the square bracket syntax

$book = ["title" => "PHP Programming", "author" => "John Doe", "price" => 20.50];

//Accessing elements in an associative array
echo "Title: " . $book["title"] . "<br>";
echo "Author: " . $book["author"] . "<br>";

//Multidimensional Arrays
//Multidimensional arrays are arrays that contain other arrays as elements. They are used to store complex data structures, such as tables or matrices. Multidimensional arrays can be indexed or associative, and they can have any number of dimensions.

//Creating a multidimensional indexed array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

//Accessing elements in a multidimensional indexed array
echo "Element at row 1, column 2: " . $matrix[0][1] . "<br>";
echo "Element at row 2, column 3: " . $matrix[1][2] . "<br>";

//Creating a multidimensional associative array
$students = array(
    array("name" => "Alice", "age" => 20),
    array("name" => "Bob", "age" => 22),
    array("name" => "Charlie", "age" => 21)
);

//Accessing elements in a multidimensional associative array

echo "Name: " . $students[0]["name"] . ", Age: " . $students[0]["age"] . "<br>";
echo "Name: " . $students[1]["name"] . ", Age: " . $students[1]["age"] . "<br>";

//Looping Through Arrays

//Using a for loop to iterate over an indexed array
$numbers = [1, 2, 3, 4, 5];

for ($i = 0; $i < count($numbers); $i++) {
    echo "Element at index $i: " . $numbers[$i] . "<br>";
}

//Using a foreach loop to iterate over an indexed array
$names = ["Alice", "Bob", "Charlie"];

foreach ($names as $name) {
    echo "Name: $name <br>";
}


$products  = [
    ["name" => "Laptop", "price" => 1000, "stock" => 5],
    ["name" =>  "Mouse", "price" => 20, "stock" => 20],
    ["name" => "keyboard", "price" => 40, "stock" => 30],
];
// Access these elements
foreach ($products as $product) {
    echo "A " . $product['name'] . " costs $" . $product['price'] . "<br>";
}
