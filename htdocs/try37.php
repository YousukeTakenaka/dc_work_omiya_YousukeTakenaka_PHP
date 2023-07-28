<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TRY37</title>
    </head>
    <body>
        <?php
            $db = new mysqli('mysql34.conoha.ne.jp', 'bcdhm_omiya_pf0014', 'x4Xh7n(%', 'bcdhm_omiya_pf0014');
            if ($db->connect_error) {
                echo $db->connect_error;
                exit();
            } else {
                print("データベースへの接続に成功しました。");
            }
            $db->close();
        ?>
    </body>
</html>