<?php

$a = 5;
$b = 10;

echo "\n Before Swapping: ".$a.','.$b;
list ($a,$b) = array($b,$a);
echo "\n After Swapping: ".$a.','.$b."\n";
 
?>