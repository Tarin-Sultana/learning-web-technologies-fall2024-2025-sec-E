<?php
$array = [10, 20, 30, 40, 50, 60, 70];

$searchElement = 40;

$found = false;

foreach ($array as $element) {
    if ($element == $searchElement) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $searchElement found in the array.";
} else {
    echo "Element $searchElement not found in the array.";
}
?>