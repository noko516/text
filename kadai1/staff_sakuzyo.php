<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>
        
    <?php
    
    try
    {

        $staff_code=$_GET['staffcode'];
  
        $dsn='mysql:dbname=shop;host=localhost;cherset=utf8';
        $user='root';
        $dbh=new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT simei FROM kozin WHERE ID =?';
        $stmt=$dbh->prepare($sql);
        $data[]=$staff_code;
        $stmt->execute($data);

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name=$rec['simei'];
        $dbh = null;
    }
    catch(Exception $e)
    {
    print'ただいま障害により大変ご迷惑をお掛けしています。';
    exit();
    }
    ?>

    スタッフ削除<br />
    <br/>
    スタッフコード<br/>
    <?php print $staff_code;?>
    <br/>
    スタッフ名<br/>
    <?php print $staff_name;?>
    <br/>
    このスタッフを削除してもよろしいですか？<br/>
    <br/>
    <form method="post"action="staff_sakuzyo_done.php">
    <input type="hidden" name="code" value="<?php print $staff_code;?>">
   
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit"  value="OK">
</form>
    </body>
</html>