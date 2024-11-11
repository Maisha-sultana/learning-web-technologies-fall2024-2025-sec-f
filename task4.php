<?php
 function number($first=20,$second=10,$third=30) 
  {
    if ($first>$second && $first>$third)
    {
        echo $first;

    }
     else if ($second>$first && $second>$third)
     {
        echo $second;
     }
     else {
        echo $third;
     }
 }
 echo number(20,10,30);
 ?>