<?php 
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION["login"])==false)
  {
    print'ログインされていません';
    print '<a href="../staff_login/staff_top.php">トップメニューへ</a>';
    exit();
    }
    else{
        print $_SESSION['staff_name'];
        print'さんログイン中<br />';
        print'<br />';
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>
    </head>
    <body>
        
    ショップ管理トップメニュー<br/>
    <a href="../staff/staff_list.php">スタッフ管理</a><br/>
    <br/>
    <a href="../pro/pro_list.php">商品管理</a><br/>
    <br/>
    <a href="staff_logout.php">ログアウト</a><br/>
    <br/>
    </body>
</html>