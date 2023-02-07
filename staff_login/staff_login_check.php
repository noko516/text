<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>

        <?php 
        
        try{
        $staff_code=$_POST['code'];
        $staff_pass=$_POST['pass'];
     

        $staff_code= htmlspecialchars($staff_code,ENT_QUOTES,'UTF-8');
        $staff_pass= htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
       
        $staff_passmd5($staff_pass);
        $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
        $user = 'root';
        $password = '';
       
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $sql = 'SELECT name FROM mst_staff WHERE code=? AND password=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $data[] = $staff_pass;
        $stmt->execute($data);
 
        $dbh = null;
        
        $rec = $stmt-> fetch(PDO::FETCH_ASSOC);

        if($rec==false)
       {
        print'スタッフコードかパスワードが間違っています';
        print'<a href="staff_login.html">戻る</a>';
       }
       else
       {
       
    }
    catch()
    {

    }
        
       ?>
    </body>
</html>