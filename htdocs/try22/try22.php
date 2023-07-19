<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TRY22</title>
    </head>
    <body>
        <form method="post">
        <?php
            $fp = fopen("file_read.txt", "r");
            while ($line = fgets($fp)) {
                echo "$line<br>";
            }
            fclose($fp);
        ?>
    </body>
</html>