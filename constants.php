<?php
   //Kk. So contants can only be created with the define function. I'm here to try it out

   define("ROOT_LOCATION", "usrlocal/www/",);          //The first part is the name of the constant variable. the second part is the value the constant variable holds
   echo ROOT_LOCATION;          //Prints out the constant variable
   
   echo "<br>";

   $directory = ROOT_LOCATION;            //Assigns the constant a variable again as directory
   echo $directory;                    //Prints out the content of directory which is the constant
?>