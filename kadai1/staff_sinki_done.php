<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
       <?php     
        try
        {

        $staff_name = $_POST['name'];
        $staff_name2=$_POST['name2'];
        $staff_bango=$_POST['bango'];
        $staff_zyusyo=$_POST['zyusyo'];
        $staff_tel=$_POST['tel'];
        $staff_mail=$_POST['mail'];



        $staff_name =htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
        $staff_name2 = htmlspecialchars($staff_name2,ENT_QUOTES,'UTF-8');
        $staff_bango = htmlspecialchars($staff_bango,ENT_QUOTES,'UTF-8');
        $staff_zyusyo = htmlspecialchars($staff_zyusyo,ENT_QUOTES,'UTF-8');
        $staff_tel = htmlspecialchars($staff_tel,ENT_QUOTES,'UTF-8');
        $staff_mail = htmlspecialchars($staff_mail,ENT_QUOTES,'UTF-8');
        
       $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
       $user = 'root';
       $dbh = new PDO($dsn, $user, );
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
       $sql ='INSERT INTO kadai1(name,name2,bango,zyusyo,tel,mail) VALUES(?,?,?,?,?,?)';
       $stmt = $dbh->prepare($sql);
       $data[] = $staff_name;
       $data[] = $staff_name2;
       $data[] = $staff_bango;
       $data[] =  $staff_zyusyo;
       $data[] = $staff_tel;
       $data[] =  $staff_mail;
       $stmt->execute($data);

       $dbh = null;

       print $staff_name;
       print'さんを追加しました。<br />';
        }       
    catch(Exception $e) {
          print 'ただいま障害により大変ご迷惑をお掛けしております。';
          print $e->getMessage();
          exit();
    }   
      ?>  

      <a href ="staff_togo.php">戻る</a>
    </body>
</html>