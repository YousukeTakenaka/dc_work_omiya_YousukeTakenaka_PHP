<?php
    $host = 'mysql34.conoha.ne.jp';
    $login_user = 'bcdhm_omiya_pf0014';
    $password = 'x4Xh7n(%';
    $database = 'bcdhm_omiya_pf0014';
    $error_msg = [];
    $product_name;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>WORK29</title>
    </head>
    <body>
        <?php
            $db = new mysqli($host, $login_user, $password, $database);
            if ($db->connect_error){
                echo $db->connect_error;
                exit();
            } else {
                $db->set_charset("utf8");
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $db->begin_transaction();

                //挿入
                if (isset($_POST['insert'])){
                    $insert = $_POST['insert'];

                    $insert = "INSERT INTO product(product_id, product_code, product_name, price, category_id) VALUE(21, 1021, 'エシャロット', 200, 1);";

                    if($result = $db->query($insert)) {
                            $row = $db->affected_rows;
                    } else {
                            $error_msg[] = 'UPDATE実行エラー [実行SQL]' .$insert;
                    }

                    if (count($error_msg) == 0) {
                            echo $row.'件挿入しました。'; 
                            $db->commit();
                    } else {
                            echo '挿入が失敗しました。'; 
                            $db->rollback();
                    }
                }
                
                //削除
                if (isset($_POST['delete'])){
                    $delete = $_POST['delete'];

                    $delete = "DELETE FROM product WHERE product_id = 21;";

                    if($result = $db->query($delete)) {
                        $row = $db->affected_rows;
                    } else {
                            $error_msg[] = 'UPDATE実行エラー [実行SQL]' .$insert;
                    }

                    if (count($error_msg) == 0) {
                            echo $row.'件削除しました。'; 
                            $db->commit();
                    } else {
                            echo '削除に失敗しました。'; 
                            $db->rollback();
                    }
                }

                $db->close();
            }
            
        ?>
        <form method="post">
            <input type="submit" name="insert" value="挿入">
            <input type="submit" name="delete" value="削除">
        </form>
    </body>
</html>