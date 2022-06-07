<?php

$a = ' kurs php ';
$b = trim($a); //tekst

echo $a . '<br>';
echo $b;

$a_length = strlen($a);
$b_length = strlen($b);
echo '<br>';
echo 'Dlugosc A: ' . $a_length . '<br>';
echo 'Dlugosc B: ' . $b_length;

echo '<br><br>';

if (str_contains($a, 'tekst')) {
    echo 'Zmienna a zawiera slowo tekst';
} else {
    echo 'Zmienna a nie zawiera slowa tekst';
}

echo '<br><br>';

$c = 'Hello World With PHP Course';
echo strtoupper($c);