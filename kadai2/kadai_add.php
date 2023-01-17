<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
        <link href="kadai_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <p>登録画面</p><br />
        <br />
        <form method="post" action="kadai_add_check.php"enctype="multipart/form-data">
        画像のタイトル<br />
        <input type="text" name="name"  style="width:200px"><br />
        画像の説明<br />
        <textarea name="name2" cols="50" rows="5"></textarea><br />
        <br />
        画像ファイルの選択<br />
        <input type="file" name="gazou" style="width:400px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
    </body>
</html>