<?php
$array = [1, 2, 3, 4, 5];
$search = 3;
$found = false;

foreach ($array as $element) {
    if ($element == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search is found in the array <br>";
} else {
    echo "$search is not found in the array <br>";
}
?>