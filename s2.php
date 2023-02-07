<?php 
session_start();
$data = $_SESSION["data"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>
        <p>s2です。データは<?=$data ?></p>
        <p><?=session_id() ?></p>
        <a href="s1.php">s1へ</a>
    </body>
</html>