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
                    $fp = fopen("file_write.txt", "a+");

                    $contents01 = htmlspecialchars($_POST['title']);
                    $contents02 = htmlspecialchars($_POST['main']);
    
                    fwrite($fp, "・".$contents01.":".$contents02."\n");
                    $file_write = "file_write.txt";
                     $ret_array = file($file_write);

                    $reversed = array_reverse($ret_array);
                
                    for($i = 0; $i <= count($reversed); $i++) {
                        echo "$reversed[$i]<br>";
                    }
                                
                    fclose($fp);          

                } else {
                    print '<p>入力情報が不足しています</p>';

                    $fp = fopen("file_write.txt", "r");
                    $file_write = "file_write.txt";
                    $ret_array = file($file_write);

                    $reversed = array_reverse($ret_array);

                    for($i = 0; $i <= count($reversed); $i++) {
                        echo "$reversed[$i]<br>";
                    }

                    fclose($fp);
                }

                
            ?>
        <?php endif; ?>
    </body>
</html>