<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>課題1</title>
    <link href="staff_syusei.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php

    try {

        $staff_code = $_GET['staffcode'];

        $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
        $user = 'root';
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT simei FROM kozin WHERE ID =?';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name = $rec['simei'];
        $dbh = null;
    } catch (Exception $e) {
        print 'ただいま障害により大変ご迷惑をお掛けしています。';
        exit();
    }
    ?>

    スタッフ修正<br />
    <br />
    スタッフコード<br />
    <?php print $staff_code; ?>
    <br />
    <br />
    <form method="post" action="staff_syusei_check.php">
        <input type="hidden" name="code" value="<?= $staff_code; ?>">
        <table>
        <tbody>
        <tr>
        <th>スタッフ名</th><td><input type="text" name="name" style="width:200px" value="<?php print $staff_name; ?>"></td>
        </tr>
        <tr>
        <th>ふりがな</th><td><input type="text" name="name2" style="width:200px"></td>
        </tr>
        <tr>
        <th>郵便番号</th><td><input type="number" name="bango" style="width:100px"></td>
        </tr>
        <tr>
        <th>住所</th><td><input type="text"name="zyusyo" style="width:200px"></td>
        </tr>
        <tr>
        <th>電話番号</th><td><input type="number" name="tel" style="width:200px"></td>
       </tr>
        <tr>
        <th>E-メールアドレス</th><td><input type="email" name="mail" style="width:200px"></td>
        </tr>
       </tbody>
       </table> 
       <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">OK</button>
    </form>
</body>

</html>