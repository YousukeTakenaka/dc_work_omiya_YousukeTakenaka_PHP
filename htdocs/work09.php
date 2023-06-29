<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK09</title>
    </head>
    <body>
        <?php
            $number = rand(1, 100);
        ?>
        <p>$number:<?php echo $number ?></p>;

        <?php switch($number % 6):
                case 0: ?>
                    <p>3と6の倍数です</p>
            <?php 
                break;
                case 3:
            ?>
                    <p>3の倍数で、6の倍数ではありません</p>
            <?php
                break;
                default:
            ?>
                    <p>倍数ではありません</p>
            <?php endswitch; ?>
        
        <?php
            $random01 = rand(1, 10);
            $random02 = rand(1,10);
        ?>

        <?php switch(true):
                case $random01 % 3 == 0 && $random02 % 3 == 0: ?>
                    <?php switch(true):
                        case $random01 > $random02: ?>
                            <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>
                    <?php
                        break;
                        case $random01 < $random02:
                    ?>
                            <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>
                    <?php
                        break;
                        default:
                    ?>
                          <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random01 ?>です。2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。</p>
                    <?php endswitch; ?>
            <?php
                break; 
                case $random01 % 3 == 0 && $random02 % 3 != 0 || $random01 % 3 != 0 && $random02 % 3 == 0: ?>
                    <?php switch(true):
                        case $random01 > $random02: ?>
                            <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>
                    <?php 
                        break;
                        default:
                    ?>
                            <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>
                    <?php endswitch ?>
            <?php
                break;
                default:
            ?>
                    <?php switch(true):
                        case $random01 > $random02: ?> 
                            <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>
                    <?php
                        break;
                        case $random01 < $random02:
                    ?>
                            <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>
                    <?php
                        break;
                        default:
                    ?>
                        <p>random01 = <?php echo $random01 ?>、random02 = <?php echo $random02 ?>です。2つは同じ数です。2つの数字の中に3の倍数が含まれていません。</p>
                    <?php endswitch ?>
            <?php endswitch; ?>
    </body>
</html>