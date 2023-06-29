<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK05</title>
    </head>
    <body>
        <?php
            //課題1
            $number = rand(1, 100);
            print '<p>$number：'.$number.'</p>';

            if ($number % 6 == 0) {
                print '<p>3と6の倍数です</p>';
            } else if ($number % 3 == 0 && $number % 6 != 0) {
                print '<p>3の倍数で、6の倍数ではありません</p>';
            } else {
                print '<p>倍数ではありません</p>';
            }

            //課題2
            $random01 = rand(1, 10);
            $random02 = rand(1, 10);

            if ($random01 > $random02 && $random01 % 3 == 0 && $random02 % 3 == 0) {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>';
            } else if ($random01 > $random02 && ($random01 % 3 == 0 && $random02 % 3 != 0 || $random01 % 3 != 0 && $random02 % 3 == 0)) {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>';
            } else if ($random01 > $random02 && $random01 % 3 != 0 && $random02 % 3 != 0) {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>';
            } else if ($random01 < $random02 && $random01 % 3 == 0 && $random02 % 3 == 0) {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>';
            } else if ($random01 < $random02 && ($random01 % 3 == 0 && $random02 % 3 != 0 || $random01 % 3 != 0 && $random02 % 3 == 0)) {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>';
            } else if ($random01 > $random02 && $random01 % 3 != 0 && $random02 % 3 != 0) {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>';
            } else if ($random01 == $random02 && $random01 % 3 == 0 && $random02 % 3 == 0) {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。</p>'; 
            } else {
                print '<p>random01 = '.$random01.',random02 = '.$random02.'です。2つは同じ数です。2つの数字の中に3の倍数が含まれていません。</p>';
            }
        ?>
    </body>
</html>