<?php
 function number($amount=1000) 
  {
    if ($amount%2==0)
    {
        echo "even<br>";

    }
     else {
        echo "odd<br>";
     }
 }
 echo number(1000);
 ?>