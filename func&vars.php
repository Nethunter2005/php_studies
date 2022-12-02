<?php
   //Just checking out how to create functions in php...kinda interesting though
   
   function longdate($timestamp)
   {
      return date("l F jS Y", $timestamp);
   }
   echo longdate(time());          //Calls the current date based on the criteria of the function
   echo "<br>";
   echo longdate(time() - 17 * 24 * 60 * 60);          //Calls the date from 17 days back based on the function I created. 17*24*60*60 meand 17days*24hours*60mins*60secs
   
   echo "<br>";
   
   function tempdate($timestamp) 
   {
       $temp = date("l dS M Y", $timestamp);
       return "The date is $temp.";
   }
   echo tempdate(time());

   echo "<br>";


   //Lets check something out...

   echo anydate(time());
   function anydate($timestamp)
   {
       $tempo = "The date is ";
       return $tempo . date("l F jS Y", $timestamp);
   }
   echo "<br>";

   // ...or better still...

   $finally = "The final date is ". anytime(time());
   echo $finally;
   function anytime($timestamp)
   {
      return date("l F jS Y", $timestamp);
   }
   echo "<br>";

   /* Remember this, variables created within a function are local to that function, and variables 
     created outside of any functions can be accessed only by non-function code. */


    $anyphrase = "Man I'm tired but the date is ";
    echo mytime($anyphrase, time());
    function mytime($text, $timestamp) 
    {
        return $text . date("l F jS Y", $timestamp);
    }
    echo "<br>";

    //Kk....So I just learnt about static variables.Let's see something.
    function test()
    {
        static $count = 0;          //So I decleared the variable caled count as static.
        echo $count;            //This prints out the value for the variable count.
        $count++;          //Increases the value of count by 1
    }
    /* As we already know , when a variable is used by a function, the variale is cleared of its
       content. What static does here is to actually preserve the value of the variable to prevent it
       from being cleared.*/
    echo test();            //Since this count in the function was static, it prints out the origional value before the increment.   
    echo "<br>";    
    echo test();            //SInce I'm calling the function for the second time and count has alresy been declared, the first line of the function is skipped. Then the previously incremented value of $count is displayed before the variable is again incremented.
    /* This means that the nest time I would call  test() the value will be increased by 1 from the value before. */ 
   
   
?>