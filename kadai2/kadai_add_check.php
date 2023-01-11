

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
    </head>
    <body>

        <?php 
        
        $kadai_name=$_POST['name'];
        $kadai_name2=$_POST['name2'];
        $kadai_gazou=$_FILES['gazou'];

        $kadai_name= htmlspecialchars($kadai_name,ENT_QUOTES,'UTF-8');
        $kadai_name2= htmlspecialchars($kadai_name2,ENT_QUOTES,'UTF-8');
       
        $err= [];
        if($kadai_name=='')
        {
            $err[] ='キャラクター名が入力されてません<br />';
        }
        else
        {
            print'キャラクター名：';
            print $kadai_name;
            print'<br />';
        }

        $err= [];
        if($kadai_name2=='')
        {
            $err[] ='説明が入力されてません<br />';
        }
        else
        {
            print'画像の説明：';
            print $kadai_name2;
            print'<br />';
        }


        $err= [];
        if($kadai_gazou=='')
        {
            $err[] ='画像が選択されてません<br />';
        }

        if($kadai_gazou['size']>0)
        {
            $err= [];
             if($kadai_gazou['size']>1000000)
             {
                $err[] ='画像が大きすぎます';
             }
             else
             {
                 move_uploaded_file($kadai_gazou['tmp_name'],'./image/'.$kadai_gazou['name']);
                 print'<img src="./image/'.$kadai_gazou['name'].'">';
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
        print'<form method="post"action="kadai_add_done.php">';
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