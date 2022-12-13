<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="staff_togo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       <?php 
       try{
        $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $dbh = new PDO($dsn, $user);
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
       $sql = 'SELECT ID, simei, hurigana FROM kozin WHERE 1';
       $stmt = $dbh->prepare($sql);
       $stmt->execute();

       $dbh = null;
       
       print 'スタッフ一覧<br /><br />';

       print '<form method="post"action="staff_bran.php">' ."\n";
       echo "<table>";
       echo "<tbody>";
       echo "<tr>";
       echo "<th></th>";
       echo "<th>ID</th>";
       echo "<th>名前</th>";
       echo "<th>ふりがな</th>";
       echo "</tr>";
       while(true)
       {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
              break;
        }
        echo "<tr>";
        print '<td> <input type="radio"name="staffcode"value="'.$rec['ID'].'"></td>' ."\n";
        print "<td>" .$rec['ID']."</td>\n";
        print "<td>" .$rec['simei']."</td>\n";
        print "<td>" .$rec['hurigana']."</td>\n";
        print'<br />';
        echo "</tr>";
        
       }
       echo "</tbody>";
       echo "</table>";

       echo  '<input class="ao" type="submit" name="sansyo" value="参照">' ."\n";
       echo  '<input class="ao" type="submit" name="sinki" value="追加">' ."\n";
       echo  '<input class="ao" type="submit" name="syusei" value="修正">' ."\n";
       echo  '<input class="ao" type="submit" name="sakuzyo" value="削除">' ."\n";
       print '</from>' ."\n";

      
       }
       catch(Exception $e){
         print 'ただいま障害により大変ご迷惑をお掛けしております。';
         exit();
       }
       ?> 

    </body>
</html>