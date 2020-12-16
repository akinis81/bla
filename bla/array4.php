<?php

foreach(range(0, 10) as $index => $value) {
    foreach(range(0, 5) as $value) {
        $masyvas[$index][$value] = rand(5, 25);
    }
}

echo '<pre>';
// print_r($masyvas);


// foreach($masyvas as $key => $_) {
//     foreach(range('A', 'B') as $smallIndex) {
//         // $smallArray[] = rand(5, 25);
//         $masyvas[$key][$smallIndex] = rand(5, 25);
//     }
// }

foreach($masyvas as $key => $_) {
    // foreach(range(1, 2) as $_) {
    //     // $smallArray[] = rand(5, 25);
    //     $masyvas[$key][] = rand(5, 25);
    // }

    $masyvas[$key][] = rand(5, 25);
    $masyvas[$key][] = rand(5, 25);

}

// print_r($masyvas);


// print_r(array_merge(range('a','z'),range('A','Z')));

// $array = [];
// $rand = range('A', 'Z');

// foreach (range(0, 9) as $arr) {
//     foreach (range(2, rand(3, 20)) as $value) {
//         $array[$arr][] = $rand[rand(0, 25)];
//         sort($array[$arr]);
//     }
// }

// sort($array);

// print_r($array);





$ids = range(1, 50);
shuffle($ids);

$usedId = [];

$masyvas5 = [];
for ($i = 0; $i < 1; $i++) {
    for ($i = 0; $i < 30; $i++) {
        $place_in_row = rand(1, 100);
        $user_id = rand(1, 50);
        do {
            $user_id = rand(1, 50);
        } while(in_array($user_id, $usedId));
        $usedId[] = $user_id;
        $masyvas5[$i]['user_id'] =  $user_id;
        $masyvas5[$i]['place_in_row'] =  $place_in_row;
    }
}


// print_r($usedId);

function cmp($arrA, $arrB)
{
    $a = $arrA["place_in_row"];
    $b = $arrB["place_in_row"];
    return $a <=> $b;   // -1 1 0
}
usort($masyvas5, "cmp");

print_r($masyvas5);
