<?php

echo '<pre>';

// print_r($_GET);

?>

<a href="?page=1">1</a><a href="?page=2">2</a><a href="?page=3">3</a>

<?php


if (!isset($_GET['page']) || 1 == $_GET['page']) {
    echo 'PAGE1';
}

elseif (2 == $_GET['page']) {
    echo 'PAGE2';
}

elseif (3 == $_GET['page']) {
    echo 'PAGE3';
}

else {
    echo 'puslapio nera';
}