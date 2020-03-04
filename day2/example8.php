<?php

/* 
 PHP has a total of eight data types which we use to construct our variables:
 Integers: are whole numbers, without a decimal point, like 4195.
 Doubles: are floating-point numbers, like 3.14159 or 49.1.
 Booleans: have only two possible values either true or false.
 NULL: is a special type that only has one value: NULL.
 Strings: are sequences of characters, like 'PHP supports string operations.'
 Arrays: are named and indexed collections of other values.
 Objects: are instances of programmer-defined classes, which can package up both
other kinds of values and functions that are specific to the class.
 Resources: are special variables that hold references to resources external to PHP
(such as database connections).
 */

//Integers
$int_var = 12345;
$another_int = -12345 + 12345;
echo $int_var;
echo "<br>";
echo $another_int;
echo "<br>";

//Doubles
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
echo $many ."+". $many_2 ."=". $few."<br>";

//Boolean
if (TRUE)
 print("This will always print<br>");
else
 print("This will never print<br>");

/*
echo and print are more or less the same. They are both used to output data to the screen. 
The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument.
 */

//NULL
//NULL is a special type that only has one value: NULL. To give a variable the NULL value,
//simply assign it like this:
$my_var = NULL;
$my_var_2 = null;