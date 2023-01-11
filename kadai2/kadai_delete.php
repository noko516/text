<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
    </head>
    <body>
        
    <?php
    
    try
    {

        $kadai_code=$_GET['kadaicode'];
  
        $dsn='mysql:dbname=shop;host=localhost;cherset=utf8';
        $user='root';
        $password ='';
        $dbh=new PDO($dsn, $id, $title, $description, $file);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT name name2 gazou FROM image WHERE code =?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai_code;
        $stmt->execute($data);

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $kadai_name=$rec['name'];
        $dbh = null;
    }
    catch(Exception $e)
    {
    print'ただいま障害により大変ご迷惑をお掛けしています。';
    exit();
    }
    ?>

    キャラクター削除<br />
    <br/>
    キャラクターコード<br/>
    <?php print $kadai_code;?>
    <br/>
    キャラクター名<br/>
    <?php print $kadai_name;?>
    <br/>
    このキャラクターを削除してもよろしいですか？<br/>
    <br/>
    <form method="post"action="staff_delete_done.php">
    <input type="hidden" name="code" value="<?php print $kadai_code;?>">
   
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit"  value="OK">
</form>
    </body>
</html>