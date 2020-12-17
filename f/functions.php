<?php

function test()
{
    // global $kin;// <--- BLOGAI!!!!

    // echo $GLOBALS['kin'];  <---- LABAI BLOGAI!!!
    
    // echo $kin;
    $bebras = 'BEBRAS';
}


function sudeti($vienas, $du = 10)
{
    $rezultatas = $vienas + $du;
    return $rezultatas;
}


function vidurkis($pirmas, ...$skaiciai)
{
   $sudetis = 0;


   foreach ($skaiciai as $val)
 {
   $sudetis += $val;
 }
 $vidurkis = $sudetis / count($skaiciai);
 return $vidurkis;
}
