<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK14</title>
    </head>
    <body>
        <?php
            $num = array();
            $length = 5;

            for($i = 0; $i < $length; $i++) {
                array_push($num, rand(1, 100));
                print '<p>'.$num[$i].'</p>';
            }

            

            function console_log($data){
                echo '<script>';
                echo 'console.log('.json_encode($data).')';
                echo '</script>';
            }

            console_log($num);
        ?>
    </body>
</html>