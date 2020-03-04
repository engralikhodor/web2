<?php
//PHP Function Parameters
// multiply a value by 10 and return it to the caller

function multiply ($value) {
 $total = $value * 10;
 return $total;
}

$retval = multiply (10);
echo "Return value is $retval\n";
