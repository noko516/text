<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品</title>
    </head>
    <body>
        商品追加<br />
        <br />
        <form method="post" action="pro_add_check.php"enctype="multipart/form-data">
        商品名を入力してください。<br />
        <input type="text" name="name"  style="width:200px"><br />
        価格を入力してください。<br />
        <input type="text" name="price" style="width:50px"><br />
        画像を選んでください。<br />
        <input type="file" name="gazou" style="width:400px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
    </body>
</html>