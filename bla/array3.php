<?php

echo '<pre>';
$masyvas = [];
foreach (range(1, 30) as $value) {
    // $masyvas[$value] = rand(5, 25);
    $masyvas[] = rand(5, 25);
    // array_push($masyvas, rand(5, 25));
}


$big10 = 0;
foreach($masyvas as $value) {
    if ($value > 10) {
        $big10++;
    }
}

$max = PHP_INT_MIN;
foreach($masyvas as $value) {
    // if ($value > $max) {
    //     $max = $value;
    // }
    $max = max($max, $value);
}

foreach (range(1, 10) as $value) {
    $masyvas[] = rand(5, 25);
}


$array1 = ['a' => 'green', 'red', 'blue', 'red'];
$array2 = ['b' => 'green', 'yellow', 'red'];
$array3 = ['c' => 'green', 'black', 'blue'];
$result = array_diff($array1, $array2, $array3);

print_r($result);



// print_r($masyvas);














// print_r($max);