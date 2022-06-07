<?php

//declere zmusza aby były typy które rządamy
declare(strict_types=1);

$a = 11;
$b = 2;

function addTwoNumbers(int|string $a, int|string $b) : int|string {
    return 'dodajemy liczbe';
}

echo addTwoNumbers($a, $b);