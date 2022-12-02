<?php
   //Practically there are two types of casting known as implicit and explicit casting.
   //Php practically uses implicit casting most of the time...Well its quite formidable that way.
   //Let me explain with the following examples...

   $a = 100; $b = "100";          //$a is an integer and $b is a string.
   echo $c = ($a + $b) . "<br>";          //calls out the value of the addition which is 200.
   /* $c is an addition of $a and $b. On a normal bases it is not posible. A string cant be added to an 
      integer. It can be concactenated though but in php it converts the second string to an integer and
      adds the value for us...Convenient right? That's implicit in a practical setting. But what if we 
      dont want it to be changed... */
    
    $k = 200; $f = 100;           //both are assigned as integers.
    echo boolval($h = $k + $f) . "<br>";          //On anormal bases I'm supposed to get a value of 300 but I changed the format to boolean so I got a boolean value. that's explicit for you.

    //another example of explicit and implicit casting

    $x = 56; $y = 12;          //both are integers at first glance
    echo $z = $x/$y . "<br>";          //because of the division,the out put of $z will be a float point.
    echo intval($z) . "<br>";            //intval here converts the float value into an integer ignoring the float points. So we just defined it . That's explicit.
?>