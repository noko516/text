<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
    </head>
    <body>
        登録画面<br />
        <br />
        <form method="post" action="kadai_add_check.php"enctype="multipart/form-data">
        画像のタイトル<br />
        <input type="text" name="name"  style="width:200px"><br />
        画像の説明<br />
        <input type="text"name="zyusyo" style="width:200px"><br />
        <br />
        画像ファイルの選択<br />
        <input type="file" name="gazou" style="width:400px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
    </body>
</html>