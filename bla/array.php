<?php

echo '<pre>';
$colors = ['red', 'green', 'blue', 'yellow'];

foreach ($colors as &$value) {
//    echo 'Reikšmė: ' . $value . '<br>';
//    if ('green' === $value) {
//         $value = 'black';
//    }
}
unset($value, $colors[1]);

foreach ($colors as $value) {
    // echo 'Reikšmė: ' . $value . '<br>';
}
$mode = current($colors);
echo "MODE: $mode <br>";

// foreach ($colors as $index => $value) {
//     echo 'Reikšmė: ' . $value . '<br>';
//     if ('green' === $value) {
//         //  $value = 'black';
//         $colors[$index] = 'black';
//     }
// }
print_r($colors);
echo '<br><br>';
$k1 = 'KA1';
$k2 = &$k1;
echo $k2;
$k1 = 'KAKA1';
echo '<br><br>';
echo $k2;
echo '<br><br>';

$transport = ['foot', 'bike', 'car', 'plane'];
$mode = current($transport); // $mode = 'foot';

$mode = next($transport);    // $mode = 'bike';
$mode = next($transport);

$mode = current($transport); // $mode = 'bike';

$mode = prev($transport);    // $mode = 'foot';

$mode = end($transport);     // $mode = 'plane';
$mode = reset($transport);


$mode = current($transport); // $mode = 'plane';
