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

        $pro_code = $_POST['code'];
        $pro_gazou_name =$_POST['gazou_name'];
        
       $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $price = '';
       $dbh = new PDO($dsn, $user, $price);
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
       $sql ='DELETE FROM mst_product WHERE code=?';
       $stmt = $dbh->prepare($sql);

       $data[] = $pro_code;
       $stmt->execute($data);

       $dbh = null;
       
       if($pro_gazou_name!='')
       {
          unlink('./gazou/'.$pro_gazou_name);
       }


     }
    catch(Exception $e) {
          print 'ただいま障害により大変ご迷惑をお掛けしております。';
          print $e->getMessage();
          exit();
    }   
      ?>  

       削除しました。<br/>
       <br/>
      <a href ="pro_list.php">戻る</a>
    </body>
</html>