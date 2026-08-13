<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function Pizza(){
        echo "Pizza Is Ordered"."<br>";
    }
     function Burger(){
        echo "Burger Is Ordered"."<br>";
    }

    $order= Pizza();
    echo ($order);
    $order= Burger();
    echo ($order);



    //another Approach
    function orderFood($food) {
    echo $food . " Is Ordered<br>";
      }

     $order = "Pizza";
    orderFood($order);

    $order = "Burger";
     orderFood($order);


     //another Example
     function greet($name) {
    echo "Hello, " . $name . "<br>";
     }

     greet("Alice");
     greet("Kenny");
     greet("James");
 
    ?>
</body>
</html>