<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
        <link href="kadai_delete_done.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       <?php     
        try
        {

        $kadai_code = $_POST['kadaicode'];
        $kadai_gazou_name = $_POST['gazou_name'];;

       $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $password = '';
       $dbh = new PDO($dsn, $user, $password);
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
       $sql ='DELETE FROM image WHERE id=?';
       $stmt = $dbh->prepare($sql);

       $data[] = $kadai_code;
       $stmt->execute($data);

       $dbh = null;

       if($kadai_gazou_name!='')
       {
          unlink('./image/'.$kadai_gazou_name);
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
      <a href ="kadai_list.php">戻る</a>
    </body>
</html>