<?php
 function vat($amount=1000) 
  {
    return $amount*(15/100);
 }
 echo vat (1000);
 echo "<br>";
 ?>