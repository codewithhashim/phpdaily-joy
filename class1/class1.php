<?php
declare(strict_types=1);


?>

<?php

define('STATUS', "checked");

const STATUS_PAID = "1";

// Boolean 

$isComplete = true;


// false -> 0, -0, null, '', "", 0.0, -0.0 all of these are false

// echo (string) $isComplete;

function sum ($x, int $y){
    var_dump($x, $y);
    return $x * $y;
}
// the '6' will give us error as the strict_type is declared
// $letsumg = sum('5', '6');
echo $letsumg;

// null data types

$x = null;

// use is_null() to check if something is null

// a variable can be null if it has not been defined.