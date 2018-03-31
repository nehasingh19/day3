<?php
$num=[16,55,36,40];
$sum =0;
 for($i=0;$i<count($num);$i++) {
     if($num[$i]%1==0) {
         $sum = $sum + $num[$i];
     }
 }

 echo $sum;