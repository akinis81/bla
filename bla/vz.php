<?php

$homepage = file_get_contents(__DIR__.'/tekstas.txt');

// $homepage = str_replace('Airija', 'Bolivija', $homepage);

// echo $homepage;


$masyvas = 'ZUIKIS';

// echo($masyvas);


file_put_contents(__DIR__.'/tekstas.txt', $masyvas);


$m = [9=>3,'DDD',7];

echo "<br>";

print_r($m);

echo "<br>";

$json = json_encode($m);

file_put_contents(__DIR__.'/data.json', $json);

echo $json;

$m1 = json_decode($json, 1);

echo "<br>";

print_r($m1);

