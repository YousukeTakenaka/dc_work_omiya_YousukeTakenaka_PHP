<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WORK18</title>
    </head>
    <body>
    <?php
        define('MAX','3'); 
        
        $customers = array( 
                array('name' => '佐藤', 'age' => '10'),
                array('name' => '鈴木', 'age' => '15'),
                array('name' => '高橋', 'age' => '20'),
                array('name' => '田中', 'age' => '25'),
                array('name' => '伊藤', 'age' => '30'),
                array('name' => '渡辺', 'age' => '35'),
                array('name' => '山本', 'age' => '40'),
        );
                    
        $customers_num = count($customers); 
        
        $max_page = ceil($customers_num / MAX); 

        if(!isset($_GET['page_id'])){
            $now = 1;
        } else {
            $now = $_GET['page_id'];
        }

        $start_no = ($now - 1) * MAX;

        $disp_data = array_slice($customers, $start_no, MAX, true);

        foreach($disp_data as $val){
            echo $val['name'].' '.$val['age'].'<br/>';
        }

        for($i = 1; $i <= $max_page; $i++){
            if($i == $now){
                echo $now.' ';
            } else {
                echo '<a href="https://portfolio.dc-itex.com/omiya/0014/work18.php?page_id='.$i.' ")>'.$i.'</a>'. '　';
            }
        }
    ?>
    </body>
</html>