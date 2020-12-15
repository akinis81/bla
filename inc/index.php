<?php

echo '<pre>';
$data = require __DIR__.'/briedis/masyvas.php';

print_r($data);
echo '<br><br>';
echo 'INDEX begin';

echo '<br><br>';

require __DIR__.'/briedis/code.php'; // <--- absoliutus kelias


if (file_exists(__DIR__.'/briedis/code1.php')) {
    require __DIR__.'/briedis/code1.php'; // <--- absoliutus kelias
}


echo '<br><br>';

echo 'INDEX end';




