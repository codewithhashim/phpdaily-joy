<?php

echo "Class 4 today";

// expressions and operators

// array subscript ([])

// logical not (!)

// operations 
// Type casting 

// (int) (double) (string) (array) (object)

// Expressions

// variables are the simplest form of expression

$ab = 45;

$ba = $ab;

// as by php docs a bit more example of php expression would be functions 

function foo()
{
    return 5;
}
$c = foo();


// similarly increment and decrement operators 
//  pre-increment evaluates to the incremented value, while post-increment evaluates to the original value before the increment.


// Ternary operator 
// assigns the value of $result to ab if a is true if false it will set the value to $c.
$a = false;
$ab = "Hello";
$c = "World";

$result = $a ? $ab : $c;
echo $result;
