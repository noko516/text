

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
    </head>
    <body>

        <?php 
        
        $kadai_name=$_POST['name'];
        $kadai_name2=$_POST['pass'];
        $kadai_gazou=$_POST['pass2'];

        $kadai_name= htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
        $kadai_name2= htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
        $kadai_gazou= htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8');
       
        if($kadai_name=='')
        {
            print'キャラクター名が入力されてません<br />';
        }
        else
        {
            print'キャラクター名：';
            print $kadai_name;
            print'<br />';
        }

        if($kadai_name2=='')
        {
            print'説明が入力されてません<br />';
        }
        else
        {
            print'画像の説明：';
            print $kadai_name2;
            print'<br />';
        }


        if($kadai_gazou=='')
        {
            print'画像が選択されてません<br />';
        }

        if($kadai_gazou['size']>0)
        {
             if($kadai_gazou['size']>1000000)
             {
              print'画像が大きすぎます';
             }
             else
             {
                 move_uploaded_file($kadai_gazou['tmp_name'],'./gazou/'.$kadai_gazou['name']);
                 print'<img src="./gazou/'.$kadai_gazou['name'].'">';
                 print '<br />';
             }
        }

        if($kadai_name==''||$kadai_name==''||$kadai_gazou=='')
       {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
       }
       else
       {
        print'<form method="post"action="staff_add_done.php">';
        print'<input type="hidden" name="name" value="' .$kadai_name.'">';
        print'<input type="hidden" name="name2" value="'.$kadai_name2.'">';
        print'<input type="hidden" name="gazou_name" value="' .$kadai_gazou['name'].'">';
        print '<br />';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';   
        print '</ form>';
    }

       ?>
    </body>
</html>