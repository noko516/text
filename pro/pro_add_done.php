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

        $pro_name = $_POST['name'];
        $pro_price = $_POST['price'];

        $pro_name =htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
        $pro_price =htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');
        
       $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $password = '';
       $dbh = new PDO($dsn, $user, $price);
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
       $sql ='INSERT INTO mst_product(name,price) VALUES(?,?)';
       $stmt = $dbh->prepare($sql);
       $data[] = $pro_name;
       $data[] = $pro_price;
       $stmt->execute($data);

       $dbh = null;

       print $pro_name;
       print'さんを追加しました。<br />';
        }       
    catch(Exception $e) {
          print 'ただいま障害により大変ご迷惑をお掛けしております。';
          print $e->getMessage();
          exit();
    }   
      ?>  

      <a href ="pro_list.php">戻る</a>
    </body>
</html>