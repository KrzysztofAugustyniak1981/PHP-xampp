<?php

$x = 20;

// & zmienia orginalną zmienną
function multipleNumber(&$number) {
    $number *= 2;
}

echo 'Oryginalna wartość x: ' . $x . '<br>';
multipleNumber($x);
echo 'Wartość x po zmianie: ' . $x . '<br>';