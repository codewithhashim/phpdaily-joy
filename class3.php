<?php

// Type casting: Convert a value of a type to another data type
echo (int) 12.5;

// may result in outputting 0. As the beginning of the string is hell and has no integers in the start.
echo (int) "hell34";

// it will output 3453
echo (int) "3453 helloo";
echo ("<br>");
echo ("<br>");


// casting null to int will output 0
echo (int) null;
echo ("<br>");

// cast to float
echo (float) "104.4";
