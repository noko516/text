<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題１</title>
        <link href="staff_sinki.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        スタッフ追加<br />
        <br />
        <form method="post" action="staff_sinki_check.php"><br />
        <table>
        <tbody>

        <tr>
        <th>スタッフ名を入力してください。</th><td><input type="text" name="name" style="width:200px"></td>
        </tr>

        <tr>
        <th>ふりがなを入力してください。</th> <td><input type="text" name="name2" style="width:200px"></td>
        </tr>

        <tr>
        <th>郵便番号を入力してください。</th><td><input type="number" name="bango" style="width:100px"></td>
        </tr>

        <tr>
        <th>住所を入力してください。</th><td><input type="text"name="zyusyo" style="width:200px"></td>
        </tr>

        <tr>
        <th>電話番号を入力してください。</th><td><input type="number" name="tel" style="width:200px"></td>
        </tr>

        <tr>
        <th>E-メールアドレスを入力してください</th><td><input type="email" name="mail" style="width:200px"></td>
        </tr>
        
       </tbody>
       </table>    
        <br />

       <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
    </body>
</html>