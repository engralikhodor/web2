<?php
//PHP Global Variables
//In contrast to local variables, a global variable can be accessed in any part of the program. 

$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
echo "Somevar is $somevar";
}
addit();