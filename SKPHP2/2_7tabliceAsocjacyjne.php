<?php

$tablica[0] = 12;

$tablica_asocjacyjna['liczba'] = 14;

//print($tablica_asocjacyjna['liczba']);
//print = wyświetl

$shopping_bag['zapiekanka'] = 2;
$shopping_bag['gazeta'] = 1.5;
$shopping_bag['mleko'] = 3;

//print_r = wyświetl zawartość wraz z nazwami tablicy

print_r($shopping_bag);

$a = $shopping_bag['zapiekanka'] + $shopping_bag['gazeta'] + $shopping_bag['mleko'] = 3;
echo "suma: " . $a;