<?php

$name = ['ganesh', 'arvi', 'bebo', 'anaya','neha'];

for ($i = 0; $i < count($name); $i++) {

    $c = $name[$i] ;

    if($c[0] != 'a' && $c[0] != 'e' && $c[0] != 'o' && $c[0]!='u'&& $c[0]!='i') {

        echo $c . PHP_EOL;

    }

}

?>