<?php

//Loops
//Loops are used to execute a block of code multiple times. There are different types of loops in PHP, including for loops, while loops, and do-while loops. Loops are useful for iterating over arrays, processing data, and performing repetitive tasks.

//For Loops
//For loops are used to execute a block of code a specified number of times. The for loop consists of three parts: an initialization, a condition, and an increment or decrement. The initialization is executed once at the beginning of the loop. The condition is evaluated before each iteration, and if it is true, the code block is executed. The increment or decrement is executed after each iteration.

//For loop syntax
// for (initialization; condition; increment/decrement) {
//     code to be executed;
// }

//Example of a for loop
for ($i = 0; $i < 5; $i++) {
    echo "The value of i is: $i <br>";
}

//While Loops
//While loops are used to execute a block of code as long as a specified condition is true. The condition is evaluated before each iteration, and if it is true, the code block is executed.

//While loop syntax
// while (condition) {
//     code to be executed;
// }

//Example of a while loop
$j = 0;
while ($j < 5) {
    echo "The value of j is: $j <br>";
    $j++;
}

//Do-While Loops
//Do-while loops are similar to while loops, but the condition is evaluated after each iteration. This means that the code block is executed at least once, even if the condition is false.

//Do-while loop syntax
// do {
//     code to be executed;
// } while (condition);

//Example of a do-while loop
$k = 0;
do {
    echo "The value of k is: $k <br>";
    $k++;
} while ($k < 5);

//Loop Control Statements
//Loop control statements are used to control the flow of loops. The most common loop control statements in PHP are break, continue, and return.

//Break
//The break statement is used to exit a loop prematurely. When the break statement is encountered, the loop is terminated, and the program continues with the next statement after the loop.

//Example of using break in a loop
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "The value of i is: $i <br>";
}

//Continue
//The continue statement is used to skip the current iteration of a loop and continue with the next iteration. When the continue statement is encountered, the current iteration is terminated, and the loop continues with the next iteration.

//Example of using continue in a loop
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue;
    }
    echo "The value of i is: $i <br>";
}

//Return
//The return statement is used to exit a function and return a value to the calling code. When the return statement is encountered in a loop, the loop is terminated, and the program continues with the next statement after the loop.

//Example of using return in a loop
function loopWithReturn()
{
    for ($i = 0; $i < 5; $i++) {
        if ($i == 3) {
            return;
        }
        echo "The value of i is: $i <br>";
    }
}

loopWithReturn();
echo "Returned from loopWithReturn function";

//For-each Loop
//The for-each loop is used to iterate over arrays. It is a specialized loop that simplifies the process of iterating over array elements.

//For-each loop syntax
// foreach ($array as $value) {
//     code to be executed;
// }

//Example of a for-each loop

$colors = array("red", "green", "blue");

foreach ($colors as $color) {
    echo "The color is: $color <br>";
}
