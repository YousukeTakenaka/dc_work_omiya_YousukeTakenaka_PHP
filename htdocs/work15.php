<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>WORK15</title>
    </head>
    <body>
        <?php
            $class01 = [
                'name' => ['tokugawa', 'oda', 'toyotomi', 'takeda'],
            ];

            $class02 =[
                'name' => ['minamoto', 'taira', 'sugawara', 'fujiwara']
            ];

            for($i = 0; $i < count($class01['name']); $i++){
                $randomScore01 = rand(1, 100);
                $class01['score'][$i] = $randomScore01;
                print '<p>'.$class01['name'][$i].'(class01):'.$class01['score'][$i].'点</p>';
            }

            for($j = 0; $j < count($class02['name']); $j++){
                $randomScore02 = rand(1, 100);
                $class02['score'][$j] = $randomScore02;
                print '<p>'.$class02['name'][$j].'(class02):'.$class02['score'][$j].'点</p>';
            }

            $school = array_merge_recursive($class01, $class02);

            print_r($school);

            if($school['score'][1] > $school['score'][6]) {
                print '<p>odaさんの方が点数が高いです。</p>';
            } else {
                print '<p>sugawaraさんの方が点数が高いです。</p>';
            }

            $ave01 = ($school['score'][0] + $school['score'][1] + $school['score'][2] + $school['score'][3]) / count($class01['name']);
            $ave02 = ($school['score'][4] + $school['score'][5] + $school['score'][6] + $school['score'][7]) / count($class02['name']);

            print '<p>class01平均点：'.$ave01.'、class02平均点：'.$ave02.'</p>';
        ?>
    </body>
</html>