<?php
   //Kk...So I'm gonna be trying out some elseif statements

   $cash = 9687.50;
   echo "$cash is the amount of cash I have on me at the moment. <br>";
   $investment = 34690.60;
   echo "I have $investment in my Investment account as of now. <br>";
   $bank_balance = 89433.00;
   echo "I just have $bank_balance in by bank account at Alpha Bay. <br>";

   echo "<br>";

   if ($bank_balance < 20000.00 && $bank_balance != 0) 
   {
       $bank_balance += $cash/2;
       $cash -= $cash/2;
       echo "Since my bank account balance is not enough I have added my cash to it so I have $cash cash now and $bank_balance in my bank account. <br>";
   } 
   elseif ($bank_balance > 55000.00) 
   {
       $investment += 15000.00;
       $bank_balance -= 15000.00;
       $bank_balance += ($cash/2) ; $cash -= ($cash/2);
       echo "I have enough money so I added part of the money in my bank account to my Investment account. <br>";
       echo "So you know I added half of my cash to my bank account just in case. A feeble attempt to payback the money sent to my investment account. <br> ";
       echo "This means that I have $investment in my Investment account, $bank_balance in my bank account and $cash as cash now. <br>";
   }
   else 
   {
       $bank_balance += ($investment/8); $investment -= ($investment/8);
       echo "I had no money in my bank account so I sent one-eighth of my investment money to my bank account. <br>";
       echo "So now I have $bank_balance in my bank account and $investment in my Investment account. <br>";
   }

   //Well its kinda cool....On to try out about switch cases.
?>