<?php
//PHP Local Variables

/*A variable declared in a function is considered local; that is, it can be referenced solely in that
function. Any assignment outside of that function will be considered to be an entirely different
variable from the one contained in the function*/
$x = 4;
function assignx () {
$x = 0;
echo "\$x inside function is $x. <br>";
}


assignx();
echo "\$x outside of function is $x. <br>";
