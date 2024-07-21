<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UFT-8">
        <title>kadai_011</title>

    </head>

    <body>
        <p>
            <?php
                $item = ['名前' => '玉ねぎ', '値段' =>  200, '産地' => '北海道'];

                foreach($item as $index => $value) {
                    echo "{$index} : {$value} <br>";
                }
            ?>
        </p>
    </body>

</html>