<?php
   //I'm gonna try a few things here...

   $age = 17;          //Sets the age to 17 years

   if ($age >= 18 && $age <= 70) {
      echo "I am fit to drive.";
   } else {
      echo "I wont be allowed to drive.";
   }         
   /* The little code above checks the age and determine whether the user will be
      allowed to drive based on my comparison operator */

    echo "<br>";

   $rel_status = "together";          //So this is the current status of the user's relationship

   if ($rel_status != "together") {
       echo "I'll be deleting my WhatsApp";
   } else {
       echo "I dont have any reason to delete my WhatsApp.";
   }
   /* The little code above checks the rel_status and determine whether the user will delete
      his WhatsApp based on my comparison operator */

    echo "<br>";

   $price = 100;          //Sets value of price to 100
   --$price;            //Decreases the value of price by 1
   
   if ($price > 100) {
        echo "Its too expensive.";
   }
   if ($price < 100) {
        echo "I can afford it without any hassle.";
   }
   /* Looks at the price and determines whether its expensive or not. I know I could have made it 
      easier by addint it into one if else statement but I just wanted it this way*/

    echo "<br>";

   $One_life_goal = "Robotics Engineer";

   if ($One_life_goal == "Robotics Engineer") {
         echo "I am still on track.";
   }
?>