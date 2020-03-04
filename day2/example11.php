<?php

/* 
 Static Variables
The final type of variable scoping that I discuss is known as static. 
 * In contrast to the variables declared as function parameters, which are destroyed on the function's exit, 
 * a static variable will not lose its value when the function exits and will still hold that value should the function be called again.

You can declare a variable to be static simply by placing the keyword STATIC in front of the variable name.
 */

 function keep_track() {
      STATIC $count = 0;
      $count++;
      print $count;
      print "<br />"; //note https://www.tutorialspoint.com/assets/questions/images/108085-1516794912.jpg
   }
   
   keep_track();
   keep_track();
   keep_track();
   
  