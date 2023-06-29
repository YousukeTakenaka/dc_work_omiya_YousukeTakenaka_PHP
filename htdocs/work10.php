<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK10</title>
    </head>
    <body>
        <?php 
            for($i = 1; $i <= 100; $i++) {
                if($i % 12 == 0){
                    print '<p>Fizz Buzz</p>';
                } else if($i % 3 == 0) {
                    print '<p>Fizz</p>';
                } else if($i % 4 == 0) {
                    print '<p>Buzz</p>';
                } else {
                    print '<p>'.$i.'</p>';
                }
            }
        ?>

        <?php
            for($j = 1; $j <= 9; $j++) {
                for($k = 1; $k <= 9; $k++) {
                    print '<p>'.$j. '*' .$k.'=' .$j * $k. '</p>';
                }
            }
        ?>

        <?php
            for($l = 1; $l <= 20; $l++) {
                for($m = 1; $m <= $l; $m++) {
                    print '*';
                }
                print '<p>!</p>';
            }
        ?>
    </body>
</html>