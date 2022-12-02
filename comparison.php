<?php
   $a = 2;
   $b = 3;

   // Kk...So I'm testing out operators used for comparing of values
   if ($a > $b) echo "$a is greater that $b. <br>";
   if ($a < $b) echo "$a is less than $b. <br>";
   if ($a >= $b) echo "$a is greater than or equal to $b. <br>";
   if ($a <= $b) echo "$a is lesser than or equal to $b. <br>";

   //Lets also try logical operators
   $k = 1;  $f = 0;

   echo ($k && $f) . "<br>";          //This prints a null value which is known as FALSE. Only prints TRUE or 1 when both values are TRUE. 
   echo ($k || $f) . "<br>";          //This prints a TRUE value. Calls a TRUE value or 1 because or means that both must be TRUE to get a TRUE value.
   echo ($k XOR $f) . "<br>";          // XOR means exclusive or. Calls a TRUE value or 1 if Only one of the values is TRUE.
   echo !$a . "<br>";              //Calls a FALSE or null value because we said not $a.

   //Something I'd have to take not of....Let's check something
   function getnext() {
        return 5 ;
   }
   $finished = "01";
   if ($finished == 1 || getnext( ) == 1) echo "Yeah <br>";          //There is a problem with this code. the second operand will not be evaluated if the first is evaluated as TRUE. So the function getnext will never be called if $finished is true

   //To correct the issue above
   $gn = getnext();
   if ($finished == 1 || $gn == 1) echo "Yeah <br>";            //In this case both operands are checked before the final boolean value is called.
   
?>