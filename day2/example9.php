<?php
//Strings
$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters

//Singly quoted strings are treated almost literally, whereas doubly quoted strings replace
//variables with their values as well as specially interpreting certain character sequences.
$variable = "name";

$test1 = 'My $variable will not print!\\n';
echo $test1;

$test2 = "My $variable will print!\\n";
echo $test2;

$test3="\$";
echo "<br>";
echo $test3;

$test4="' Printing single quote";
echo "<br>";
echo $test4;

$test5="\" Printing double quotes";
echo "<br>";
echo $test5;

$test6='" Or like this';
echo "<br>";
echo $test6;


$test7="\\";
//we can't use one backslash inside quotes
echo "<br>";
echo $test7;
