<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
    </head>
    <body>
       <?php 
       
       try{
        $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $dbh = new PDO($dsn, $id, $title, $description, $file);
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
       $sql = 'SELECT code,name FROM image WHERE 1';
       $stmt = $dbh->prepare($sql);
       $stmt->execute();

       $dbh = null;
       
       print 'キャラクター一覧<br /><br />';

       print '<form method="post"action="staff_branch.php">';
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
       print '<input type="submit" name="disp" value="参照">';
       print '<input type="submit" name="add" value="追加">';
       print '<input type="submit" name="delete" value="削除">';
       print '</from>';
       }
       catch(Exception $e){
         print 'ただいま障害により大変ご迷惑をお掛けしております。';
         exit();
       }
       ?> 
    </body>
</html>