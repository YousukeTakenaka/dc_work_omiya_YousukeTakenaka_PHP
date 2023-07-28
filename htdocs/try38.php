<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>TRY38</title>
    </head>
    <body>
        <?php
            $db = new mysqli('mysql34.conoha.ne.jp', 'bcdhm_omiya_pf0014', 'x4Xh7n(%', 'bcdhm_omiya_pf0014');
            if ($db->connect_error) {
                echo $db->connect_error;
                exit();
            } else {
                $db->set_charset("utf8");
            }

            $sql = "SELECT product_name, price FROM product WHERE price <= 100";
            if ($result = $db->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    echo $row["product_name"] . $row["price"] . "<br>";
                }
                $result->close();
            }
            $db->close();
        ?>
    </body>
</html>