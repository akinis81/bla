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



