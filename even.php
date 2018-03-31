<?php

$num = [1,34,23,34,45,34,2,34,5456,34,23,5,657,65,34,5,0];


//que- print even

//
echo "No of element in array " . count($num) .PHP_EOL ;
for($i=0; $i< count($num); $i++) {

    if($num[$i] % 2 == 0)  {
        echo  $num[$i] . PHP_EOL;
    }

}

?>