<?php
   $count = 5;        //I've set the value of count to 5
   echo $count;       //This prints the set value which is 5
   echo "<br>";

   /* I'm coming to assign new variables to the variable count*/

   $count += 3;
   echo $count;      //This prints the new value of count as 8 since += 3 added 3 to the initial value
   echo "<br>";

   $count -= 4;      
   echo $count;      //This prints the new value of count as 4 since -= 4 subtracted 4 from the initial value which was 8
   echo "<br>";

   $count *= 5;      
   echo $count;      //This prints the new value of count as 20 since *= 4 multiplies 5 with the initial value value which is 4
   echo "<br>";

   $count /= 2;      
   echo $count;      //This prints the new value of count as 10 since /= 2 divided the last value of count which was 20 into 2
   echo "<br>";

   $count %= 3;      
   echo $count;      //This prints the new value of count as 1 since %= 3 finds the modulo 3 of the initial value which was 10
   echo "<br>";

   //So let's look at String Concactenation in Php
   $user_firstname = "Kenny ";
   $user_middlename = "Keli ";
   $user_lastname = "Hardy";

   $username = $user_firstname.$user_middlename.$user_lastname;
   echo $username;
   echo "<br>";

   //Let me try this way to check something. username has a value already but I want to add another name
   echo $username.' Kelly';          //It worked.Lets try another
   echo "<br>";

   $forgotten_name = " Lucas";
   $username .= $forgotten_name;
   echo $username;                     //This also worked. Adding a string to an already existing string
   echo "<br>";

   $msgs = 5;
   echo "You have $msgs messages in your Inbox";
   echo "<br>";

   //Lets try another way to reproduce the above
   echo "You have ". $msgs. " messages in your Inbox";         //Well it works just fine
   echo "<br>";

   $info = 'Preface variables with a $ like this: $variable';
   echo $info;

   echo "<br>";
   $y = 0;
   if ($y-- == 0) echo $y;
   
   ?>