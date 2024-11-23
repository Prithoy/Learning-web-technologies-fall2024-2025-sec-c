<?php
$array = [
    ['1', '2', '3', 'A'],
    ['1', '2', 'B', 'C'],
    ['1', 'D', 'E', 'F']
];

foreach ($array as $row) {
    foreach ($row as $element) {
        echo "$element ";
    }
    echo "<br>";
}
?>