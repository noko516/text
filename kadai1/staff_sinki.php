<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="staff_sinki.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <table>
        <tbody>
        スタッフ追加<br />
        <br />
        <form method="post" action="staff_sinki_check.php"><br />
        <tr>
        <th>スタッフ名を入力してください。<br />
        ふりがなを入力してください。<br />
        郵便番号を入力してください。<br />
        住所を入力してください。<br />
        電話番号を入力してください。<br />
        </tr>
        E-メールアドレスを入力してください。<br />
        <input type="text" name="name" style="width:200px"><br />
        <input type="text" name="name2" style="width:200px"><br />
        <input type="number" name="bango" style="width:100px"><br />
        <input type="text"name="zyusyo" style="width:200px"><br />
        <input type="number" name="tel" style="width:200px"><br />
        <input type="email" name="mail" style="width:200px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
        <tbody>
       </table>
    </form>
    </body>
</html>