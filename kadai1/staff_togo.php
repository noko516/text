<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>
       <?php 
       
       try{
        $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $dbh = new PDO($dsn, $user);
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
       $sql = 'SELECT code,name FROM mst_staff WHERE 1';
       $stmt = $dbh->prepare($sql);
       $stmt->execute();

       $dbh = null;
       
       print 'スタッフ一覧<br /><br />';

       print '<form method="post"action="staff_bran.php">';
       while(true)
       {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
              break;
        }
        print '<input type="radio"name="staffcode"value="'.$rec['code'].'">';
        print $rec['name'];
        print'<br />';
       }
       print '<input type="submit" name="sansyo" value="参照">';
       print '<input type="submit" name="sinki" value="追加">';
       print '<input type="submit" name="syusei" value="修正">';
       print '<input type="submit" name="sakuzyo" value="削除">';
       print '</from>';
       }
       catch(Exception $e){
         print 'ただいま障害により大変ご迷惑をお掛けしております。';
         exit();
       }
       ?> 
    </body>
</html>