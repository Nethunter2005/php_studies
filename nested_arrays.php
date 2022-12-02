<?php
   $oxo = array(array('o', ' ', 'x'),
                array('x', 'x', 'o'),
                array('o', 'x', ' '));

    /* This is a nested array. Its an array that contains 3 other arrays forming a 3x3 matrix.
       I mean that's what I'll call it. Its a tictactoe structure */

    echo $oxo[0][2];          //This returns the value of the third element in the first array
    echo "<br>";
    echo $oxo[1][1];          //This returns the value of the second element in the second array
    echo "<br>";
    echo $oxo[2][0];          //This returns the value of the first element in the third array

    /* The first square bracket talks about the position of the array and the second one talks about
       the postion of the content you want in the specified array */

?>