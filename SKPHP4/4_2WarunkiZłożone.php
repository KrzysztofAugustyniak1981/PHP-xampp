<?php

$a = 0;




//&& podwójny uppersand oznacza oba warunki muszą być spełnione
// || oznacza lub

if($a > 0 && $a <30) {
    
    echo 'zmienna a mieści się w przedziale 1-29';
} else if ($a >= 50 && $a <= 100) {
    echo 'zmienna a mieści się w przedziale 50-100';
} else 
echo 'zmienna a nie mieści się w żadnym przedziale';
