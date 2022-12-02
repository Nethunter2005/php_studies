<?php
   /* Kk. So this program calculates my expenses and determines whether my bank balance needs more money or not. */
   
   $foodstuff = 1200; $fuel = 600; $furniture = 2600; $hm_maintainance = 1000; $tech = 3530;

   $salary = 10000;            //Weekly Salary
   $bank_balance = 10000;             //Current bank account balance
   $investment_acc = 670320;                //Current investment account balance

   $expenses = $foodstuff + $fuel + $furniture + $hm_maintainance + $tech;           //Totals my monthly expenses
   echo "Total expenses for this month is $expenses . <br>";                //Calls out my total expenses for the month

   $bank_balance -= $expenses;                 //My current bank balance after deducting my expenses
   echo "$bank_balance is my bank balance if I deduct my monthly expenses. <br>";           //Calls out my bank balance after paying my expenses

   if ($bank_balance < 100)
   {
       $bank_balance += $salary;             //Condition adds my salary to my bank balance if my bank balance is less than 100
       echo "Just added $salary to my current bank balance so now I have $bank_balance. <br>";          //calls out my current balance now if condition is met
   } 
   else 
   {   
       /* Kk So now if I have more than 100 btc in my acc then I wanted half of my salary to go to my investment acc and the rest 
          should be sent to my normal bank account. Damn...It was kinda difficult letting the new balance automatically reflect after the payments.*/

       $investment_acc += ($salary -= ($salary/2) );          //Adds half of my salary to the investment acc whilst actually registering that half of the money was removed.
       $bank_balance += $salary;              //Add the rest of the salary to my bank account balance.
       $salary -= $salary;              //This code reflects the current amount as my salary after adding the remaining half to my bank account.
       echo "Now this is my salary; $salary and this is my bank balance; $bank_balance <br>";
       echo "My Investment account balance is also $investment_acc . <br>";
   }
   
?>