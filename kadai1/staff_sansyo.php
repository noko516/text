<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>課題1</title>
</head>

<body>

    <?php

    try {

        $staff_code = $_GET['staffcode'];

        $dsn = 'mysql:dbname=shop;host=localhost;cherset=utf8';
        $user = 'root';
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT simei, hurigana, yubin, zyusyo, denwa, email FROM kozin WHERE ID =? ';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name = $rec['simei'];
        $staff_name2 = $rec['hurigana'];
        $staff_bango = $rec['yubin'];
        $staff_zyusyo = $rec['zyusyo'];
        $staff_tel = $rec['denwa'];
        $staff_mail = $rec['email'];
        $dbh = null;
    } catch (Exception $e) {
        print 'ただいま障害により大変ご迷惑をお掛けしています。';
        print $e->getMessage();
        exit();
    }
    ?>
    スタッフ情報参照<br />
    <br/>
    スタッフコード<br/>
    <?php print $staff_code;?>
    <br/>
    氏名<br/>
    <?php print $staff_name;?>
    <br/>
    ふりがな<br/>
    <?php print $staff_name2;?>
    <br/>
    郵便番号<br/>
    <?php print $staff_bango;?>
    <br/>
    住所<br/>
    <?php print $staff_zyusyo;?>
    <br/>
    電話番号<br/>
    <?php print $staff_tel;?>
    <br/>
    E-メールアドレス<br/>
    <?php print $staff_mail;?>
    <br/>
    <br/>
    <form>
    <button type="button" onclick="history.back()">戻る</button>
 
    </body>
</html>