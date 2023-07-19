<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WORK17</title>
    </head>
    <body>
        <form method="post">
            <p>名前：<br>
            <input type="text" name="display_text"></p>
            <input type="checkbox" name="check[]" value="選択肢1">選択肢01
            <input type="checkbox" name="check[]" value="選択肢2">選択肢02
            <input type="checkbox" name="check[]" value="選択肢3">選択肢03
            <p><input type="submit" value="送信"></p>
        </form>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <?php 
                if(isset( $_POST['display_text']) && $_POST['display_text'] != "") {
                    print '<p>名前：' .htmlspecialchars($_POST['display_text'], ENT_QUOTES, 'UTF-8').'</p>';
                } else {
                    print '<p>入力されていません</p>';
                }

                $check = $_POST['check'];
                foreach($check as $check_name){
                    echo '<span>'. $check_name . '</span> ';
                }
            ?>
        <?php endif; ?>
            
    </body>
</html>