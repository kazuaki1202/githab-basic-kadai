<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
  // クラスを定義する(food)
        class Food{
          private $name;
          private $price;

            public function __construct(string $name, int $price){
            
            $this->name = $name;
            $this->price = $price;

          }
          public function show_price(){
            echo $this->price;
          }
        }
  // インスタンス化する
        $food = new Food('potato', 250);
        print_r ($food);

        echo'<br>';
 // クラスを定義する(animal)
        class Animal{
          private $name;
          private $height;
          private $weight;
      
           public function __construct(string $name, int $height, string $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
           }
           public function show_height(){
            echo $this->height;
           }
        }
  // インスタンス化する
       $animal = new Animal ('dog' , 60 , 5000);
       print_r ($animal);
       
       echo '<br>';
       $food->show_price();
       echo '<br>';
       $animal->show_height();

        ?>

        
    </p>
</body>

</html>