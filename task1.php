<?php
 function area($length=1,$width=0) 
  {
    return $length*$width;
 }
 function perimeter($length=1,$width=2) 
 {
   return 2* ($length*+$width);
}
echo area(1,2);
echo "<br>";
echo perimeter(1,2);
?>