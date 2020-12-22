<?php
print_r($_GET);
print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'POST METODAS';
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo 'GET METODAS';
}


// if (!empty($_GET)) {
//     echo 'GET METODAS';
//     }
    
//     elseif (!empty($_POST)) {
//         echo 'POST METODAS';
//     }

?>
<form action="" method="get">

<input type="text" name="t1">

<button type="submit" name="b" value="button1">1</button>
<button type="submit" name="b" value="button2">2</button>

</form>


<form action="?extra=55" method="post">

<input type="text" name="t1">

<button type="submit" name="b" value="button1">1</button>
<button type="submit" name="b" value="button2">2</button>

</form>