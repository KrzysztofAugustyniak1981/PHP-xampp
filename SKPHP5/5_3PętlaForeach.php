<?php

//$people = ['Jan', 'Bartek', 'Marta', 'Aleksander', 'Ola', 'Kasia'];
//
//foreach ($people as $person) {
//    echo $person . ' z Warszawy' . '<br>';
//}


$cars = [
    'Renault' => [
        'engine' => '1.0',
        'fuel' => 'pb95',
        'color' => 'black'
    ],
    'Audi' => [
        'engine' => '2.0',
        'fuel' => 'diesel',
        'color' => 'white'
    ]
];
//$cars nazwa tablicy as tutaj klucz do kolejnej tablicy => $part jest to klucz w 2 dablicy
foreach ($cars as $car => $part) {
    echo $car . ' ' . $part['engine'] . '<br>';
    // $part['engine'] wyświetl wartości według klucza do 2 dabeli dla 'engine'
}