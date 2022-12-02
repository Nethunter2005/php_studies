<?php
   //Learning about the continue command in php

   $j = 10;             //Assigned value of $j

   while ($j > -10)           //condition of while loop; $j is greater than -10
   {
       $j--;                      //Decrement by 1 of $j
       if ($j == 0) continue;          //This line skips the part of the loop where $j = 0
       echo (10/ $j) . "<br>";
   }
   /* if we did not skip the $j == 0 part, we would have gotten an error since a number cant 
      be divide by 0 */
?>