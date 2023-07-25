<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WORK19</title>
    </head>
    <body>
        <form method="post">
            <p>タイトル<br>
            <input type="text" name="title"></p>
            <p>書き込み内容<br>
            <input type="text" name="main"></p>
            <br>
            <input type="submit" value="送信">
        </form>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <?php
                if((isset($_POST['title']) && $_POST['title'] != "") && (isset($_POST['main']) && $_POST['main'] != "")) {
                    $fp = fopen("file_write.txt", "w");

                    fwrite($fp, '<p>・'.$_POST['title'].'：'.$_POST['name'].'</p>');

                    fclose($fp);
                } else {
                    print '<p>入力されていません</p>';
                }
            ?>
        <?php endif; ?>
    </body>
</html>