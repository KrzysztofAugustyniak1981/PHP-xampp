<?php

$x = 20;

// & zmienia orginalną zmienną
function multipleNumber(&$number) {
    $number *= 2;
}

echo 'Oryginalna wartość x: ' . $x . '<br>';
multipleNumber($x);
echo 'Wartość x po zmianie: ' . $x . '<br>';
//zmienną podajemy w referencji wywołania funkcji dzięki czemu funkcja może być zastosowana wielokrotnie dla róążnych zmiennych