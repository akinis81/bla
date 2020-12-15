<?php

$homepage = file_get_contents(__DIR__.'/tekstas.txt');

// $homepage = str_replace('Airija', 'Bolivija', $homepage);

echo $homepage;


$masyvas = 'ZUIKIS';

// echo($masyvas);


file_put_contents(__DIR__.'/tekstas.txt', $masyvas);