<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
    </head>
    <body>
        スタッフ追加<br />
        <br />
        <form method="post" action="staff_sinki_check.php"><br />
        スタッフ名を入力してください。<br />
        <input type="text" name="name" style="width:200px"><br />
        ふりがなを入力してください。<br />
        <input type="text" name="name2" style="width:200px"><br />
        郵便番号を入力してください。<br />
        <input type="number" name="bango" style="width:100px"><br />
        住所を入力してください。<br />
        <input type="text"name="zyusyo" style="width:200px"><br />
        電話番号を入力してください。<br />
        <input type="number" name="tel" style="width:200px"><br />
        E-メールアドレスを入力してください。<br />
        <input type="email" name="mail" style="width:200px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
    </body>
</html>