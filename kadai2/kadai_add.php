<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>キャラクター</title>
        <link href="kadai_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
    <p>画像の登録</p>
        </header><br />
        <br />
        <form method="post" action="kadai_add_check.php"enctype="multipart/form-data">
        <table class='hyou'>
            <tr>
        <tbody>
        <th>画像のタイトル</th>
        <td><input type="text" name="name"  style="width:200px"></td>
        <tr><br /></tr>
        <th>画像の説明</th><br />
        <td><textarea name="name2" cols="50" rows="5"></textarea></td><br />
        <tr><br /><tr>
        <th>画像ファイルの選択</th><br />
        <td><input type="file" name="gazou" style="width:400px"></td><br />
        <tr><br /></tr>
        </tr>
         </tbody>
        </table>
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
    </body>
</html>