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
        $dbh=new PDO($dsn, $id, $title, $description, $file);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT name,name2,gazou FROM image WHERE code =?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai_code;
        $stmt->execute($data);

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $kadai_name=$rec['name'];
        $kadai_name2=$rec['name2'];
        $kadai_gazou_name=$rec['gazou'];
        $dbh = null;

        if($kadai_gazou_name=="")
        {
            $disp_gazou='';
        }else
        {
            $disp_gazou='<img src="./gazou/'.$kadai_gazou_name.'">';
        }
    }
    catch(Exception $e)
    {
    print'ただいま障害により大変ご迷惑をお掛けしています。';
    exit();
    }
    ?>

    キャラクター参照<br />
    <br/>
    キャラクターコード<br/>
    <?php print $kadai_code;?>
    <br/>
    キャラクター名<br/>
    <?php print $kadai_name;?>
    <br/>
    キャラクター説明<br/>
    <?php print $kadai_name2;?>
    <br/>
    <?php print $disp_gazou;?>
    <br/>
    <br/>
    <form>
    <button type="button" onclick="history.back()">戻る</button>
 
    </body>
</html>