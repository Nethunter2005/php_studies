<?php
   $myname = "Kenny Hardy";
   $myage = 17;

   echo "a: " .   71    . "<br>";          //Numerical literal
   echo "b: " . "Hello" . "<br>";          //String literal
   echo "c: " . FALSE   . "<br>";          //Constant literal
   echo "d: " . $myname . "<br>";          //String variable
   echo "e: " . $myage  . "<br>";          //Numerical variable

   function num_days() 
   {
       return date("z", );
   }
   $day_number = 366 - num_days();
   echo $day_number ,"<br>";

   $days_to_new_year = 366 - $day_number;          //Expression
   if ($days_to_new_year < 30) {
       echo "Not long now till New Year", "<br>";          //Statement
   } else {
       echo "Its long but we will wait", "<br>";          //Statement
   }

   //Damn.....I think I'm getting good at it. yeah!!!.

   //Lets try a multiple assignment statement
   $level = $score = $time = 25;
   echo $level, "<br>", $score, "<br>", $time, "<br>";
?>