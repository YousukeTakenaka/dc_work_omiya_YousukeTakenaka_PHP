<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WORK20</title>
    </head>
    <body>
        <?php
            if(!isset($_FILES['upload_image'])){
                echo 'ファイルが送信されていません。';
                exit;
            }
        
            $save = 'img/' . basename($_FILES['upload_image']['name']);
            if(move_uploaded_file($_FILES['upload_image']['tmp_name'], $save)){
                echo "<img src= '$save' >";
            } else {
                echo 'アップロード失敗しました。';
            }
        ?>

        
        <!-- <?php if(move_uploaded_file($_FILES['upload_image']['tmp_name'], $save)) :?>
            <img src="<?php echo $save?>" alt="">;
        <?php else: ?>
            <?php echo 'アップロード失敗しました。'; ?>
        <?php endif; ?> -->
        
    </body>
</html>