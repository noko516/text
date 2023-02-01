<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
        <link href="kadai_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       <?php     
        try
        {

        $kadai_name = $_POST['name'];
        $kadai_name2 = $_POST['name2'];
        $kadai_gazou_name = $_POST['gazou_name'];

        $kadai_name =htmlspecialchars($kadai_name,ENT_QUOTES,'UTF-8');
        $kadai_name2 =htmlspecialchars($kadai_name2,ENT_QUOTES,'UTF-8');
        $kadai_gazou_name =htmlspecialchars($kadai_gazou_name,ENT_QUOTES,'UTF-8');

       $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $dbh = new PDO($dsn,$user,"");
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
       $sql ='INSERT INTO image(title,description,file) VALUES(?,?,?)';
       $stmt = $dbh->prepare($sql);
       $data[] = $kadai_name;
       $data[] = $kadai_name2;
       $data[] = $kadai_gazou_name;
       $stmt->execute($data);

       $dbh = null;

       print $kadai_name;
       print'を追加しました。<br />';
        }       
    catch(Exception $e) {
          print 'ただいま障害により大変ご迷惑をお掛けしております。';
          print $e->getMessage();
          exit();
    }   
      ?>  

      <a href ="kadai_list.php">戻る</a>
    </body>
</html>