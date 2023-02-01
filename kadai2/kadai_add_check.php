

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
         <link href="kadai_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
    <p>画像の登録画面</p>
       </header><br />
        <br />

        <?php 
        
        $kadai_name=$_POST['name'];
        $kadai_name2=$_POST['name2'];
        $kadai_gazou=$_FILES['gazou'];

        $kadai_name= htmlspecialchars($kadai_name,ENT_QUOTES,'UTF-8');
        $kadai_name2= htmlspecialchars($kadai_name2,ENT_QUOTES,'UTF-8');
       

        if($kadai_name=='')
        {
            print 'キャラクター名が入力されてません<br />';
        }
        else
        {
            echo "<table class='hyou'>";
            echo "<tbody>";
            echo "<tr>";
            print'<th>キャラクター名：</th>';
            print "<td>".$kadai_name."</td>";
            echo "</tr>";
            print'<br />';
        }


        if($kadai_name2=='')
        {
            print '説明が入力されてません<br />';
        }
        else
        {   echo "</tr>";
            print'<th>画像の説明：</th>';
            print "<td>".$kadai_name2."</td>";
            echo "</tr>";
            print'<br />';
        }


        $err= [];
        if($kadai_gazou=='')
        {
            print '画像が選択されてません<br />';
        }

        if($kadai_gazou['size']>0)
        {
             if($kadai_gazou['size']>1000000)
             {
                print '画像が大きすぎます';
             }
             else
             {
                 move_uploaded_file($kadai_gazou['tmp_name'],'./image/'.$kadai_gazou['name']);
                 echo "<tr>";
                 echo "<th></th>";
                 print'<td><img src="./image/'.$kadai_gazou['name'].'"></td>';
                 echo "</tr>";
                 echo "</tbody>";
                 echo "</table>";
                 print '<br />';
             }
             
        }

        print "この画像を保存しますか？";
       

        if($kadai_name==''||$kadai_name==''||$kadai_gazou=='')
       {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
       }
       else
       {
        print'<form method="post"action="kadai_add_done.php">';
        print '<input type="hidden" name="name" value="' .$kadai_name.'">';
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