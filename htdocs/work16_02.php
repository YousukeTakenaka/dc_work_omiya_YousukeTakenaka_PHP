<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>TRY20</title>
    </head>
    <body>
        <?php
            if(isset( $_GET['display_text']) && $_GET['display_text'] != "") {
                print '<p>名前：' .htmlspecialchars($_GET['display_text'], ENT_QUOTES, 'UTF-8').'</p>';
            } else {
                print '<p>入力されていません</p>';
            }

            echo '<p>';
            foreach($_GET['check'] as $value){
                echo "{$value},";
            }
            echo '</p>';
        ?>
    </body>
</html>