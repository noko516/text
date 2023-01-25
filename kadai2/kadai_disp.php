<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
        <link href="kadai_disp.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
    <?php
    
    try
    {

        $kadai_code=$_GET['kadaicode'];
  
        $dsn='mysql:dbname=shop;host=localhost;cherset=utf8';
        $user='root';
        $dbh=new PDO($dsn, $user,"" );
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT title,description,file FROM image WHERE id =?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai_code;
        $stmt->execute($data);
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
 
        $kadai_name=$rec['title'];
        $kadai_name2=$rec['description'];
        $kadai_gazou_name=$rec['file'];
        

        $dbh = null;
    
        if($kadai_gazou_name=="")
        {
            $disp_gazou='';
        }else
        {
            $disp_gazou='<img src="./image/'.$kadai_gazou_name.'">';
        }
    }
    catch(Exception $e)
    {
    print'ただいま障害により大変ご迷惑をお掛けしています。';
    print $e->getMessage();
    exit();
    }
    ?>

   <header>
   <p>キャラクター参照</p>
   </header><br />
    <br/>
    キャラクターコード<br/>
    <?php print $kadai_code;?>
    <br/>
    キャラクター名<br/>
    <?php print $kadai_name;?>
    <br/>
    キャラクター説明<br/>
    <?php print $kadai_name2;?>
    <br/>
    <?php print $disp_gazou;?>
    <br/>
    <br/>
    <form>
    <button type="button" onclick="history.back()">戻る</button>
 
    </body>
</html>