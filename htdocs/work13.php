<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK13</title>
    </head>
    <body>
        <?php
            $i = 1;
            while($i <= 100):
                if($i % 12 == 0):
                    print '<p>Fizz Buzz</p>';
                elseif($i % 3 == 0):
                    print '<p>Fizz</p>';
                elseif($i % 4 == 0):
                    print '<p>Buzz</p>';  
                else:
                    print '<p>'.$i.'</p>';
                endif;
                $i++;
            endwhile;
        ?>

        <?php
            $j = 1;
            while($j <= 9):
                $k = 1;
                while($k <= 9):
                    print '<p>' .$j. '*' .$k.' = ' .$j * $k.'</p>';
                    $k++;
                endwhile;
                $j++;
            endwhile;
        ?>

        <?php
            $l = 1;
            while($l <= 20):
                $m = 1;
                while($m <= $l):
                    print '*';
                    $m++;
                endwhile;
                print '<p>!</p>';
                $l++;
            endwhile;
        ?>
    </body>
</html>