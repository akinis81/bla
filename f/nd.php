<?php

function h1($text) 
{
    print_r($text);
    
    return "<h1>$text</h1>";
}

function h1CallBack($text) 
{
    $text = is_array($text) ? $text[0] : $text;
    return "<h1 style=\"display:inline;\">$text</h1>";
}

$string = md5(time());

echo $string;
echo '<br>';

$result = preg_replace_callback('/\d+/', 'h1CallBack', $string);

echo $result;
echo '<br>';


// echo (int) 6.89;

$sk = 6;

if (is_integer($sk)) {
    echo 'GERAI';
}
else {
    echo 'PRASTAI';
}


$rz = [
    4,
    7,
    7,
    [
        1,
        7,
        3,
        4,
        4,
        [
            5,
            9,
            1,
            [
                4,
                7,
                0
            ]
        ]
    ]
];

foreach(range(1, rand(10,20)) as $v){}