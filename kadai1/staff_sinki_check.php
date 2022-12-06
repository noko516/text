<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>

        <?php 
        
        $staff_name =$_POST['name'];
        $staff_name2 =$_POST['name2'];
        $staff_bango =$_POST['bango'];
        $staff_zyusyo =$_POST['zyusyo'];
        $staff_tel =$_POST['tel'];
        $staff_mail=$_POST['mail'];


        $staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
        $staff_name2 = htmlspecialchars($staff_name2,ENT_QUOTES,'UTF-8');
        $staff_bango = htmlspecialchars($staff_bango,ENT_QUOTES,'UTF-8');
        $staff_zyusyo = htmlspecialchars($staff_zyusyo,ENT_QUOTES,'UTF-8');
        $staff_tel = htmlspecialchars($staff_tel,ENT_QUOTES,'UTF-8');
        $staff_mail = htmlspecialchars($staff_mail,ENT_QUOTES,'UTF-8');

       
        if($staff_name=='')
        {
            print'スタッフ名が入力されてません<br />';
        }
        else
        {
            print'スタッフ名：';
            print $staff_name;
            print'<br />';
        }
        
        if($staff_name2=='')
        {
            print'ふりがなが入力されてません<br />';
        }
        else
        {
            print'ふりがな：';
            print $staff_name2;
            print'<br />';
        } 

        if($staff_bango=='')
        {
            print'郵便番号が入力されてません<br />';
        }
        else
        {
            print'郵便番号:';
            print $staff_bango;
            print'<br />';
        }
        
        if($staff_zyusyo=='')
        {
            print'住所が入力されてません<br />';
        }
        else
        {
            print'住所:';
            print $staff_zyusyo;
            print'<br />';
        }
        
        if($staff_tel=='')
        {
            print'電話番号が入力されてません<br />';
        }
        else
        {
            print'電話番号:';
            print $staff_tel;
            print'<br />';
        }
        if($staff_mail=='')
        {
            print'E-メールアドレスが入力されてません<br />';
        }
        else
        {
            print'E-メールアドレス:';
            print $staff_mail;
            print'<br />';
        }

        if($staff_name==''||$staff_name2==''||$staff_bango==''||$staff_zyusyo==''||$staff_tel==''||$staff_mail=='')
       {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
       }
       else
       {
        print'<form method="post" action="staff_sinki_done.php">';
        print'<input type="hidden" name="name" value="' .$staff_name.'">';
        print'<input type="hidden" name="name2" value="'.$staff_name2.'">';
        print'<input type="hidden" name="bango" value="' .$staff_bango.'">';
        print'<input type="hidden" name="zyusyo" value="' .$staff_zyusyo.'">';
        print'<input type="hidden" name="tel" value="' .$staff_tel.'">';
        print'<input type="hidden" name="mail" value="' .$staff_mail.'">';
        print '<br />';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';   
        print '</ form>';
    }

       ?>
    </body>
</html>