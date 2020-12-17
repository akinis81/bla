<?php

$kin = 'KIN';
define('ZUIKIS', 'Ilgaausis');

include __DIR__.'/functions.php';

// test();

// echo $bebras;

// $masyvas = [7, 13, 8];

$labas = 'Hello'; // Global scope

function pasveikinimas(&$arg)
{
    $arg = 'hi5';
    echo "VIDUJE: $arg<br>";
}

// pasveikinimas($labas);
// echo "ISORE: $labas";


// $foo = function() {
//     static $index = 0;
//     $index++;
//     echo "$index<br>";
// };


// $foo();
// $foo();
// $foo();

// function recursive($num){
//     echo $num, ' TOP<br>';
//     if ($num < 4){
//         //Kviečiame save. Padidiname numerį vienetu.
//         recursive($num + 1); //
//     }
//     echo $num, ' BOTTOM<br>';
//     return $num;
// }
// $startNum = 1;

// var_dump(recursive($startNum));




// $r = sudeti(...$masyvas);

// echo $r;

// echo vidurkis(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);


// $masyvas = [
//     ['a','d'],
//     ['v','e'],
//     ['a','c'],
//     ['s','r'],
// ];

// $f = function($a, $b) 
// {
//     return $a[0] <=> $b[0];
// };

// usort($masyvas, $f);


$result = 0;

$one = function()
{ 
    var_dump($result); 
};
 
$two = function() use ($result)
{ 
    var_dump($result); 
};
 
$three = function() use (&$result)
{ 
    var_dump($result); 
};
 
$result++;
 
// $one();    // NULL: $result nepasiekiamas
// $two();    // int(0): $result nukopijuojamas
// $three();    // int(1)




// usort($masyvas, 'vardas');

// function vardas($a, $b) 
// {
//     return $a[0] <=> $b[0];
// };

// echo '<pre>';
// print_r($masyvas);

$func = function () use (&$func) { 
    static $current = 10; 
     
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
     
    // spausdinam reikšmę.
    echo "$current<br>"; 
     
    $current--; 
     
    $func();
    echo "$current<br>";  
 }; 
  //  Kviečiam funkciją
 $func();
 


