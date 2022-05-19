<?php

$a = [];

array_push($a,2,3,4);
array_push($a, 100,200,300);
array_pop($a);
array_shift($a);
foreach ($a as $number) {
    echo $number . ', ';
}

echo '<br>';
echo 'Mamy ' . count($a) . ' elementow';

$b = 'Hello world with PHP 8';
//rozbicie stringa na tablice pierwszy prametr to spacja która oddziela elementy drugi parametr to nazwa stringa
$b_array = explode(' ', $b);

echo '<br><br>';

print_r($b_array);

//zmiana tablicy w string
$c = implode('-', $b_array);

echo '<br><br>';

echo strtolower($c);