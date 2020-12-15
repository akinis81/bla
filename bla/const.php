<?php


define('BRIEDIS', 'Didelis');

define('BARSUKAS', ['barsukas', 'nemiega']);

echo BRIEDIS;


if (defined('BARSUKAS')) {
    echo BARSUKAS[0];
}
else {
    echo 'Barsukas miega';
}

echo '<br>';

echo __DIR__;