<?php
   /* This is kinda complex. The point for this file was to show how to break out of for loops
      and continue program execution but I used it in something complex so let me explain. */

   $fp = fopen("text.txt", "wb");

   for ($j = 0; $j < 100; ++$j)
   {
       $written = fwrite( $fp , "data ");

       if ($written == FALSE) break;
   }
   fclose($fp);

   /* The above program creates a text file called text.txt in binary format and then returns a pointer 
      to the file in the variable $fp, which is used later to refer to the open file. The loop then 
      iterates 100 times (from 0 to 99) writing the string data to the file. After each write, the 
      variable $written is assigned a value by the fwrite function representing the number of characters 
      correctly written. But if there is an error, the fwrite function assigns the value FALSE. The 
      behavior of fwrite makes it easy for the code to check the variable $written to see whether it is 
      set to FALSE and, if so, to break out of the loop to the following statement closing the file. */
?>