<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
        <link href="kadai_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       <?php 
       
       try{
        $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $dbh = new PDO($dsn,$user,"");
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
       $sql = 'SELECT id,title,description,file FROM image WHERE 1';
       $stmt = $dbh->prepare($sql);
       $stmt->execute();

       $dbh = null;
       
       echo "<p>";
       print 'キャラクター一覧<br /><br />';
       echo "</p>";

       print '<form method="post"action="kadai_branch.php">';
       echo "<table class='hyou'>";
       echo "<tbody>";
       echo "<tr>";
       echo "<th>ID</th>";
       echo "<th>名前</th>";
       echo "<th>画像</th>";
       echo "</tr>";
       while(true)
       {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
              break;
        }
        
        $kadai_gazou_name=$rec['file'];
        $disp_gazou='<i><img src="./image/'.$kadai_gazou_name.'"></i>';
        echo "<tr>";
        print '<td><input type="radio"name="kadaicode"value="'.$rec['id'].'">';
        print "<td>".$rec['title']."</td>";   
        print "<td>".$disp_gazou."</td>";
        print'<br />';
        echo "</tr>";

       }
       echo "</tbody>";
       echo "</table>";
       print '<input type="submit" name="disp" value="参照">';
       print '<input type="submit" name="add" value="追加">';
       print '<input type="submit" name="delete" value="削除">';
       print '</from>';
       }

 

       catch(Exception $e){
         print 'ただいま障害により大変ご迷惑をお掛けしております。';
         print $e->getMessage();
         exit();
       }
       ?> 
    </body>
</html>