<?php
   $number = 12345 * 67890;
   echo $number;          //This print the result of the multiplicaton which is 838102050

   echo "<br>";

   echo substr($number, 3, 1);          
   /* the substr function converts the result which is the variable into a string in the first part.
      the second part tells the stating point of the value we want from the string keeping in mind 
      that counting starts from 0 in php. the third part now tells it to call the first value from the
      position we specified as 3(the 4th position) */

    echo "<br>";
      
    $pi = "3.1415927";
    $radius = 5;
    echo $pi * ($radius * $radius);
?>