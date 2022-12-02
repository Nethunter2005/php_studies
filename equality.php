<?php
   function month()
   {
       return date("F", );
   }
   $month = month();
   echo $month, "<br>";

   if ($month == "December")
   {
       echo "We are in the month of December!!!" , "<br>";
   } else {
       echo "We are not yet in December." , "<br>";
   }

   $a = "1000";
   $b = "+1000";

   if ($a == $b) echo "1", "<br>";         // == means 'equal to'
   if ($a === $b) echo "2", "<br>";          // === means 'identical to'
   echo "<br>";
   if ($a != $b) echo "1", "<br>";         // != means 'not equal to'
   if ($a !== $b) echo "2", "<br>";          // === means 'not identical to'
   
?>