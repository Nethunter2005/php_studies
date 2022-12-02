<?php

   $a = 30;
   $b = 50;

   /* Trying two different ways of doing the same thing with logical operators */
   if ($a == 30 and $b > 40) {
      echo "It's an A1.";
   }
   echo "<br>";

   if ($a == 30 and $b > 40) {
      echo "It's an A1.";
   }
   echo "<br>";

   /* Trying two different ways of doing the same thing with logical operators */
   if ($a == 30 or $b == 50) {
      echo "Its okay bruh.";
   }
   echo "<br>";
   if ($a == 30 || $b == 50) {
      echo "That also another way.";
   }
   echo "<br>";

   //Actually I am confused with what the code below is supposed to do. Just checking it out.
   if (!($a == $b)) {
      echo " Let's see what happens.";
   }


?>