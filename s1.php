<?php 
session_start();
if(isset($_SESSION["data"])){
$data = $_SESSION["data"];
$data++;
$_SESSION["data"] = $data;
}else{
    $_SESSION["data"] = 0;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>
        <p>データは<?=$data ?></p>
        <a href="s2.php">s2へ</a>
    </body>
</html>