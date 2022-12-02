<?php
   $author = "Kenny Hardy";
   echo "Life is Chaos by itself. You are gonna get broken, you are gonna get blown,
         like everything. I'm a developer. I'm a programmer. I'm a problem solver. 
         That's what matters.     
              
         -$author.";

    echo "<br>";

    $auth = "Bill Gates";
    $text = "Measuring programming progress by lines of code is like measuring 
             aircraft building by weight.     
             
             -$auth.";
    echo $text;

    echo "<br>";

    $author1 = "Brian W. Kernighan";
    echo <<<_END
    Debugging is twice as hard as writting the code in the first place.
    Therefore, If you write the code as cleverly as possible. you are,
    by definition, not smart enough to debug it.

    -$author1.
_END;  

    echo "<br>";
    
    $author2 = "Scott Adams";
    $out = <<<_END
    Normal people believe that if it ain't broken, dont fix it.
    Engineers believe that if it ain't broke, it doesn't have enough
    features yet.

    -$author2.
_END;
    echo $out;

?>