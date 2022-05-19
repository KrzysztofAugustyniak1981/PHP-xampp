<?php

$country_names = [
    'France' => [
        'Sabine',
        'Suzanne',
        'Jeannett'
    ],
    'Poland' => [
        'Jan',
        'Maciej',
        'Dawid'
    ],
    'Deutschland' => [
        'Hermann',
        'Martin'
    ]
];

foreach ($country_names as $country => $names) {
    echo 'Names of ' . $country . '<br>';
    foreach ($names as $first_name) {
        echo $first_name . '<br>';
    }
    echo '<br>';
}