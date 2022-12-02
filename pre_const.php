<?php
   echo __LINE__;          //This code prints out the current line I'm working on. __LINE__ is a predefined constant
   echo "<br>";
   echo __FILE__;          //Also a predefined constant, this prints out the path of this very file.
   echo "<br>";
   echo __DIR__;          //This prints the directory of the file I'm working on or the path of the folder in which this file is in.
   echo "<br>";
   
   $status = "negative";
   if ($status == "negative") {
       echo "My code is not flawed.", "<br>";
   } else {
       echo "I've got to debug my code.", "<br>";
   }

   $value = "pultchritudinous";
   echo substr($value, 4, 3);       //I'll say a successful conversion of string to integer.
   echo __FUNCTION__;

   //Lets say I still cant find the use of the predetermined function called __FUNCTION__
   //Lets try others for now then

   echo "<br>";
   echo "This is  line ". __LINE__ . " of file ". __FILE__ . " in folder ". __DIR__;



?>