<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects</title>
</head>
<body>
    <?php
   class Car{
         public $color;
         public $brand;
         public function start(){
            echo "Car is Starting";
         }
    }
    $car1=new Car();
    $car1->color="Red";
    $car1->brand="Merecedes";

    echo $car1->color;
    echo "<br>";
    echo $car1->brand;
    echo $car1->start();

    ?>
</body>
</html>