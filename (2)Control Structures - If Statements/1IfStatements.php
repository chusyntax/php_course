<?php

//Control structures - If statements and Switch statements - the methods that direct the flow of a program's execution

//If Statements
//If statements are used to execute code based on a condition
//If the condition is true, the code block will be executed
//If the condition is false, the code block will not be executed

// Control structures in PHP are used to make decisions based on conditions, loop through a set of instructions multiple times, and break out of a loop or switch statement. The most common control structures used in PHP are if-else statements, loops such as for and while loops, and switch statements.

$age = 25;

if ($age >= 18) {
    echo "You are an adult";
}

echo "<br>";

$age = 15;

if ($age >= 18) {
    echo "You are an adult";
} else {
    echo "You are a minor";
}

echo "<br>";


$newAge = 20;
$isMember = true;
$hasDiscountCoupon = false;

//When it comes to if statements, the conditions in the brackets are evaluated first

if ($newAge >= 18 && ($isMember || $hasDiscountCoupon)) {
    echo "You are eligible for the discount.";
} else {
    echo "No discount available.";
}


$day = "Monday";
$message  = "Today is ";
switch ($day) {
    case "Monday":
        echo "$message Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;

    default:
        echo "Today is a good day";
        break;
}


// Operators commonly used in if statements, categorized by their type:


//     1. Comparison Operators
//     == : Equal to
    
//     != or <> : Not equal to
    
//     === : Identical (equal and of the same type)
    
//     !== : Not identical (either not equal or not of the same type)
    
//     > : Greater than
    
//     < : Less than
    
//     >= : Greater than or equal to
    
//     <= : Less than or equal to
    
//     2. Logical Operators
//     && : Logical AND (both conditions must be true)
    
//     || : Logical OR (at least one condition must be true)
    
//     ! : Logical NOT (negates the condition)
    
//     3. Ternary Operator
//     ? : : A shorthand for an if-else statement.
    
//     4. Null Coalescing Operator
//     ?? : Returns the first operand if it exists and is not null, otherwise returns the second operand. - Basicallly will give what is after the ?? if it is null (default value)
    
//     These are the most commonly used operators in if statements in PHP
