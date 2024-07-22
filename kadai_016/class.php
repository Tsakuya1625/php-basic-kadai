<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
        //  クラスを定義
        class Food {

            // プロパティを定義
            private $name;
            private $price;

            // メソッドを定義
            public function show_price() {
                echo $this->price;
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        //  クラスを定義
        class Animal {

            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // メソッドを定義
            public function show_height() {
                echo $this->height;
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化
        $food = new Food('りんご', 300);
        
        $animal = new Animal('ねこ', 30, 30);

        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // メソッドにアクセス
        $food->show_price();
        echo '<br>';
        $animal->show_height();

        ?>
    </p>
</body>

</html>