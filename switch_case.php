<?php
   //This is the if...elseif statement for a particular program

   $page = "Signup";
   
   if ($page == "Home") echo "You selected Home. <br>";
   elseif ($page == "About") echo "You selected About. <br>";
   elseif ($page == "News") echo "You selected News. <br>";
   elseif ($page == "Login") echo "You selected Login. <br>";
   elseif ($page == "Links") echo "You selected Links. <br>";
   else echo "Page not Identified. <br>";

   //If I am to use a switch case to reproduce the same program, It would look like this.

   switch ($page) 
   {
    case "Home":
        echo "You selected Home. <br>";
        break;
    case "About":
        echo "You selected About. <br>";
        break;
    case "News":
        echo "You selected News. <br>";
        break;
    case "Login":
        echo "You selected Login. <br>";
        break;
    case "Links":
        echo "You selected Links. <br>";
        break;
    default:
        echo "Page not Identified. <br>";
        break;
   }

   //This is also another format under switch case to reproduce the same switch case program.

   switch ($page) :                         //Here instead of the curly brackets {...}, we used :...endswitch;
    case "Home":
        echo "You selected Home. <br>";
        break;
    case "About":
        echo "You selected About. <br>";
        break;
    case "News":
        echo "You selected News. <br>";
        break;
    case "Login":
        echo "You selected Login. <br>";
        break;
    case "Links":
        echo "You selected Links. <br>";
        break;
    default:
        echo "Page not Identified. <br>";
        break;
   endswitch;

   //I've got to practice the switch case some more when I have time.
?>