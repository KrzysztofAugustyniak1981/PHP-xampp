<?php

if (!file_exists('plik.txt')) {
    touch('plik.txt');
}

//$file = fopen('plik.txt','a');
//fwrite($file,'Hello');
//fclose($file);

file_put_contents('plik.txt', 'Hello', FILE_APPEND);
$file_content = file_get_contents('plik.txt');
echo $file_content;