<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK08</title>
    </head>
    <body>
        <?php
            $number = rand(1, 100);
            print '<p>$number:'.$number.'</p>';

            switch($number % 6) {
                case 0:
                    print '<p>3と6の倍数です</p>';
                    break;
                case 3:
                    print '<p>3の倍数で、6の倍数ではありません</p>';
                    break;
                default:
                    print '<p>倍数ではありません</p>';
            }

            $random01 = rand(1, 10);
            $random02 = rand(1,10);

            switch(true){
                case $random01 % 3 == 0 && $random02 % 3 == 0:
                    switch(true) {
                        case $random01 > $random02:
                            print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>';
                            break;
                        case $random01 < $random02:
                            print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中には3の倍数が2つ含まれています。</p>'; 
                            break;
                        default:
                            print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。</p>'; 
                    } 
                    break;
                case $random01 % 3 == 0 && $random02 % 3 != 0 || $random01 % 3 != 0 && $random02 % 3 == 0:
                    switch(true) {
                        case $random01 > $random02:
                            print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>';
                            break;
                        default:
                            print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。</p>';
                    }
                    break;
                default:
                    switch(true) {
                        case $random01 > $random02:
                            print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random01の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>';
                            break;
                        case $random01 < $random02:
                            print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。random02の方が大きいです。2つの数字の中に3の倍数が含まれてません。</p>';
                            break;
                        default:
                        print '<p>random01 = '.$random01.'、random02 = '.$random02.'です。2つは同じ数です。2つの数字の中に3の倍数が含まれていません。</p>';
                    }
            }

        ?>
    </body>
</html>