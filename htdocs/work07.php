<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK07</title>
    </head>
    <body>    
        <?php
            $number = rand(1, 100);
        ?>
        <p>$number：<?php echo $number ?></p>

        <?php if ($number % 6 == 0): ?>
            <p>3と6の倍数です</p>
        <?php elseif ($number % 3 == 0 && $number % 6 != 0): ?>
            <p>3の倍数で、6の倍数ではありません</p>
        <?php else: ?>
            <p>倍数ではありません</p>
        <?php endif; ?>

        
        <?php $random01 = rand(1, 10); ?>
        <?php $random02 = rand(1, 10); ?>

        <?php if ($random01 > $random02 && $random01 % 3 == 0 && $random02 % 3 == 0): ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中には3の倍数が2つ含まれています</p>
        <?php elseif ($random01 > $random02 && ($random01 % 3 == 0 && $random02 % 3 != 0 || $random01 % 3 != 0 && $random02 % 3 == 0)): ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php echo $random02 ?>です。random01の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>
        <?php elseif ($random01 > $random02 && $random01 % 3 != 0 && $random02 % 3 != 0): ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php  echo $random02 ?>です。random01の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>
        <?php elseif ($random01 < $random02 && $random01 % 3 == 0 && $random02 % 3 == 0): ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>
        <?php elseif ($random01 < $random02 && ($random01 % 3 == 0 && $random02 % 3 != 0 || $random01 % 3 != 0 && $random02 % 3 == 0)): ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>
        <?php elseif ($random01 > $random02 && $random01 % 3 != 0 && $random02 % 3 != 0): ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php echo $random02 ?>です。random02の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>
        <?php elseif ($random01 == $random02 && $random01 % 3 == 0 && $random02 % 3 == 0): ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php echo $random02 ?>です。2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。</p>
        <?php else: ?>
            <p>random01 = <?php echo $random01 ?>,random02 = <?php echo $random02 ?>です。2つは同じ数です。2つの数字の中に3の倍数が含まれていません。</p>
        <?php endif; ?>
    </body>
</html>