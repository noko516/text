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
        $dbh=new PDO($dsn, $user,"");
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT title,description,file FROM image WHERE id =?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai_code;
        $stmt->execute($data);

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $kadai_name=$rec['title'];
        $dbh = null;
    }
    catch(Exception $e)
    {
    print'ただいま障害により大変ご迷惑をお掛けしています。';
    print $e->getMessage();
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
    <form method="post"action="kadai_delete_done.php">
    <input type="hidden" name="code" value="<?php print $kadai_code;?>">
   
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit"  value="OK">
</form>
    </body>
</html>