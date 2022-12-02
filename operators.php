<?php
   echo 6 + 2;         //prints out the result of the sum of 6 and 2
   echo "<br>";
   $j = 16;          //sets value of variable j to 16
   echo $j;          //prints out the content of variable j
   echo "<br>";
   $operators = array(array('Operator', 'Description', 'Example'),
                      array('+', 'Addition', $j + 10),
                      array('-', 'Subtraction', $j - 6),
                      array('*', 'Multiplication', $j * 3),
                      array('/', 'Division', $j / 4),
                      array('%', 'Modulus(division remainder)', $j % 3),
                      array('++', 'Increment', ++ $j),          //This increases the value of 16 to 17
                      array('--', 'Decrement', -- $j));          //This reduces the new value which is 16 back to 17
    echo $operators[0][2];
    echo "<br>";
    echo $operators[1][2];
    echo "<br>";
    echo $operators[2][2];
    echo "<br>";
    echo $operators[3][2];
    echo "<br>";
    echo $operators[4][2];
    echo "<br>";
    echo $operators[5][2];
    echo "<br>";
    echo $operators[6][2];
    echo "<br>";
    echo $operators[7][2];


?>