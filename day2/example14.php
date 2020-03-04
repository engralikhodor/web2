<?php
/*
A constant is a name or an identifier for a simple value. A constant value cannot change
during the execution of the script. By default, a constant is case-sensitive. By convention,
constant identifiers are always uppercase.
 *  */
define("MINSIZE", 50);
echo MINSIZE;
echo "<br>";
echo constant("MINSIZE"); // same thing as the previous line
$x=MINSIZE+1;
echo "<br>";
echo $x;

