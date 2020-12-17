<?php


$masyvas1 = [[5,6,6,20,17],[5,6,22,7,16],[5,6,5,5,19],[5,6,19,10,24]];
$suma = [0, 0, 0, 0, 0];
foreach ($masyvas1 as $value) {
    foreach ($value as $barsukas => $elementas) {
        $suma[$barsukas] += $elementas;
    }
}

// print_r($suma);


// echo md5(time());


    echo "<pre>";
    
    $arr101 = $firstPart = [];
    $rand = 0;

    // generating array
    while(count($arr101) < 101){
        $rand = rand(0, 300);
        (in_array($rand, $arr101) == true) ?: $arr101[] = $rand;
    }
    sort($arr101);

   


    // variable for testing purposes only
    $maxTest = max($arr101);
    // key of the max value 
    $max = array_keys($arr101, max($arr101)); 
    unset($arr101[$max[0]]);
    // print_r($max[0]);
    // primary array
    // print_r($arr101);
    echo "Max value: $maxTest, Key: $max[0] <br>";
    
    // switch max element to the middle
    // $temp = $arr101[$max[0]];
    // $arr101[$max[0]] = $arr101[50];
    // $arr101[50] = $temp;

    // aray after sorting the max value
    // print_r($arr101);
    
    // 1st part of array already sorted
    // $firstPart = array_slice($arr101, 0, 51);
    // // sort($firstPart);
    // print_r($firstPart);
    
    //sorting the 2nd part of array
    // $secondPart = array_slice($arr101, 51, 50);
    // // rsort($secondPart);
    // sort($secondPart);
    // print_r($secondPart);
    
    //sorted array
    // print_r($arr101);
    
    foreach ($arr101 as $key => $value) {
        if ($key % 2) $firstPart[] = $value;
        else $secondPart[] = $value;
    }
    // print_r($firstPart);
    // print_r($secondPart);
    
    // $sumFirst = array_sum($firstPart);
    // $sumSecond = array_sum($secondPart);
    // $absDiff = abs($sumFirst - $sumSecond);
$z = 0;
    for ($i=2; $i < 52; $i++) { 
        $sumFirst = array_sum($firstPart);
        $sumSecond = array_sum($secondPart);
        $absDiff = abs($sumFirst - $sumSecond);
        $z++;
        if($absDiff < 30) break;
        $tmp = $firstPart[$i];
        $firstPart[$i] = $secondPart[$i-2];
        $secondPart[$i-2] = $tmp;
        }

        echo $z;
// do{

// }while($absDiff > 30)



    sort($firstPart);
    rsort($secondPart);

    $finalArr101 = array_merge($firstPart, [$maxTest], $secondPart);
    print_r($finalArr101);

    echo "1st part sum: $sumFirst <br>";
    echo "2nd part sum: $sumSecond <br>";
    echo "Absolute difference: $absDiff";
    echo "</pre>";