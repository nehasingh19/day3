<?php
/* You have a array of names, find the name with longest
 *  length.
 * Print the longest name
 *
 */
$name = ['Julia Robert','Angelina Jolie','Rosh Geller',
    'Joe','Chandler','Monika','Phoebe','Robert Downey Jr.'];

$longestIndex =0 ;

for($i=0;$i<count($name);$i++){

    if(strlen($name[$i])>=strlen($name[$longestIndex])){
        $longestIndex=$i;
    }

}

echo $name[$longestIndex] .PHP_EOL ;


