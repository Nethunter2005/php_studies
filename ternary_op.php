<?php
   //So lets try the ternary operation which is denoted by ?

   /* The ? operator is passed an expression that it must evaluate, along with two statements to 
      execute: one for when the expression evaluates to TRUE, the other for when it is FALSE. */
      
   $fuel = 5;          //Fuel status shown by digital dashboard of vehicle
   echo $fuel <= 1 ? "Fill tank now. <br>" : "There is enough fuel. <br>";     

   /* If there is one gallon or less of fuel, the string "Fill tank now" is returned to the 
      preceding echo statement. Otherwise, the string "There's enough fuel is returned."  */

   $enough = $fuel <= 1 ? FALSE . "<br>": TRUE . "<br>";          
   echo $enough;

   /* The above $enough as TRUE(1) if the tank has more 
     than one gallon and returns FALSE(0) if tank is equal or less than one */

   /* More like in games. If a program is to print the Highest score it checks the new one against the 
      previous ones and determines which is greater and prints out the corresponding output. */
   $saved = $saved >= $new ? $saved : $new;      //Should produce a warning since nothing is assigned yet.

   
?>