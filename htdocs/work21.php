<?php
  $check_data ='';
  if(isset($_POST['check_data'])){
    $check_data = htmlspecialchars($_POST['check_data'], ENT_QUOTES, 'UTF-8');
  }

  $check_number ='';
  if(isset($_POST['check_number'])){
    $check_number = htmlspecialchars($_POST['check_number'], ENT_QUOTES, 'UTF-8');
  }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK21</title>
    </head>
    <body>
        <form method="post">
                <div>半角アルファベット(大文字、小文字)で入力を行ってください。</div>
                <input type="text" name="check_data" value= <?php echo $check_data ?>>
                <input type="submit" name="submit1" value="送信">
        </form>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php
            if(isset($_POST['submit1'])){
                if (preg_match('/^[a-zA-Z]+$/', $check_data) && $check_data !== '') {
                    if(preg_match('/dc/', $check_data)){
                        echo "<div>ディーキャリアが含まれています。</div>";
                    } elseif(preg_match('/end$/', $check_data)) {
                    echo "<div>終了です！</div>"; 
                    }
                } else {
                    echo "<div>半角アルファベット以外が入力されています。</div>";
                }
            }
        ?>
        <?php endif; ?>
        <br>
        <form method="post">
            <div>携帯電話番号(090,080,070から始まる)を入力してください。(ハイフンありで)</div>
            <input type="text" name="check_number" value= <?php echo $check_number ?>>
            <input type="submit" name="submit2" value="送信">
        </form>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php
            if(isset($_POST['submit2'])){
                if (preg_match('/^0[7-9]0-[0-9]{4}-[0-9]{4}$/', $check_number) && $check_number !== '') {
                    echo "正しい携帯電話番号の形式です。";
                } else {
                    echo "携帯電話番号の形式ではありません。";
                }
            }
        ?>
        <?php endif; ?>
    </body>
</html>