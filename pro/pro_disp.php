<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品</title>
    </head>
    <body>
        
    <?php
    
    try
    {

        $pro_code=$_GET['procode'];
  
        $dsn='mysql:dbname=shop;host=localhost;cherset=utf8';
        $user='root';
        $password ='';
        $dbh=new PDO($dsn, $user, $price);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT name,price FROM mst_product WHERE code =?';
        $stmt=$dbh->prepare($sql);
        $data[]=$pro_code;
        $stmt->execute($data);

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $pro_name=$rec['name'];
        $dbh = null;
    }
    catch(Exception $e)
    {
    print'ただいま障害により大変ご迷惑をお掛けしています。';
    exit();
    }
    ?>

    商品情報参照<br />
    <br/>
    商品コード<br/>
    <?php print $pro_code;?>
    <br/>
    商品名<br/>
    <?php print $pro_name;?>
    <br/>
    価格<br/>
    <?php print $pro_price;?>円
    <br/>
    <br/>
    <form>
    <button type="button" onclick="history.back()">戻る</button>
 
    </body>
</html>