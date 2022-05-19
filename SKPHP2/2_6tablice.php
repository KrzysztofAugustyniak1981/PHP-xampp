<?php

$numbers = [];
$numbers[] = 124;//pierwsza wartość
$numbers[] = 250;//druga wartość
$numbers[] = 510;//trzecia wartość
$numbers[15] = "lizak";//czwarta wartość

//przyjmowanie danych do tablicy jest numerowane po koleji

echo $numbers[0]. "<br>";
echo $numbers[2]. "<br>";
echo $numbers[1];

//aby wyświetlić tablice musi być podany numer zmiennej przechowywanej

echo "<br><br>";
var_dump($numbers);
//wyświetlenie dzięki funkcji typ zmiennej i zmienna
echo "<br><br>";


print_r($numbers);
//wyświetli tylko wartości tablic
echo "<br><br>";

//echo implode(separator:',', $numbers); łączenie tablicy w string

echo 'wynik: ' . $numbers[0] + $numbers [2];