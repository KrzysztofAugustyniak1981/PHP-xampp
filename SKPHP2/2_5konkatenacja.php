<?php

$text = 'Ala ma kota';
$concat = ' a Zosia jest głupia';

//konkatenacja w php jest poprzez . czyli kropke
echo $text . $concat . '<br>';

echo 'test' . '<br>';

echo 'test_drugi ' . 2.3;
echo '<br><br><br>';

$a = 2;
$b = 3;
$c = 4;

$d = 0;
//Konkatenacja skrótowa dopisujemy nie dodajemy
$d .= $a;

echo $d;