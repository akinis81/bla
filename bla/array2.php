<?php

echo '<pre>';
$colors = ['red', ['red1', 'green1', 'blue1', 'yellow1'], 'blue', 'yellow'];


foreach ($colors as $value) {
    if (is_array($value)) {
        foreach ($value as $value1) {
            echo 'Reikšmė: ' . $value1 . '<br>';
        }
    }
    else {
        echo 'Reikšmė: ' . $value . '<br>';
    }
}