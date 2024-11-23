<?php
$a = 10;
$b = 20;
$c = 15;


echo "Given Numbers are : $a,$b, $c <br><br>";
if ($a > $b && $a > $c) {
    echo "Largest number is: $a";
} elseif ($b > $a && $b > $c) {
    echo "Largest number is: $b";
} else {
    echo "Largest number is: $c";
}
?>