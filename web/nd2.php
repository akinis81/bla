<?php
if (isset($_GET['color'])) {
    if (1 == $_GET['color']) {
        $backgroundColor = '#ff0000';
    }
    if (2 == $_GET['color']) {
        $backgroundColor = '#0000ff';
    }
    else {
        $backgroundColor = '#'.$_GET['color'];
    }
}
else {
    $backgroundColor = '#000';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND2</title>
</head>
<style>
body {
    background: <?= $backgroundColor ?>;
}
body a {
    color: #777;
}
</style>
<body>
    
    <a href="http://localhost/bla/web/nd2.php?color=1">MAKE RED</a>
    <a href="http://localhost/bla/web/nd2.php?color=2">MAKE BLUE</a>
    <a href="http://localhost/bla/web/nd2.php">MAKE BLACK</a>

</body>
</html>