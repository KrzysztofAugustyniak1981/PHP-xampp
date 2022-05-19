<?php
//Silnia z 4
//1*2*3*4=24

$liczba = 4;
$silnia = 1;

/*for($i = 1; $i <= $liczba; $i++) {
    $silnia *= $i;
}
*/

$i = 1;

do {
    $silnia *= $i;
    $i++;
} while($i <= $liczba);

echo $silnia;