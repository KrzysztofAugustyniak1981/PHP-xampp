<?php

$x = [1, 2, 3, 4];

foreach ($x as $number) {
    echo $number . ', ';
}

echo '<br>';

$new_x = array_map(function($numbers){
    return $numbers * 4;
}, 
$x);

foreach ($new_x as $new_number) {
    echo $new_number . ', ';
}