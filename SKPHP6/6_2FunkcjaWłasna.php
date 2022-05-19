<?php

const CURRENCY = ' zł';

function discountedPrice($price, $percentageDiscount) {
    return $price - ($price * ($percentageDiscount / 100));
}

$base_price = 100;
$percentageDiscount = 40;

$discountedPrice = discountedPrice($base_price, $percentageDiscount);

echo $discountedPrice . CURRENCY;
