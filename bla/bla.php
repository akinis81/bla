<h1>HELLO</h1>
<?php

$iki = rand(3000, 4000);
$pirmas = false;
for ($i=1; $i<=$iki; $i++) {
    if(!($i % 77)){
        if (!$pirmas) {
            echo $i;
            $pirmas = true;
        }
        else {
            echo ", $i";
        }
    }
}

// for ($i = 0; $i < 10000000; $i++) {
//     $c = '10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.';
// }


$time1start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu suvalge 20 bananu. \n 10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.';
}

$time1end = microtime(true);
$res1 = $time1end - $time1start;

$time2start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu suvalge 20 bananu. \n 10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.10 bezdzioniu suvalge 20 bananu.";
    
}
$time2end = microtime(true);
$res2 = $time2end - $time2start;

echo '<br><br><br><br><br>';

echo "R1: $res1 R2: $res2";



$s = '79 50 60 68';

$arr = explode(' ', $s); //<---- is stringo i array
echo '<pre>';
print_r($arr);