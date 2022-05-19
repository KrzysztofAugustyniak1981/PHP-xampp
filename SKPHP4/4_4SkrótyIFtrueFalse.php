<?php

$is_active = false;

// if ($is_active) to to samo co if ($is_active == true)

if ($is_active) {
    echo 'Opcja Aktywna';
} else {
    echo 'Opcja nie aktywna';
}

// skrót ? to IF a : to else
echo ($is_active) ?'Opcja Aktywna'  : 'Opcja nie aktywna';
//funkcja zawsze jest sprawdzana czy prawdziwa
