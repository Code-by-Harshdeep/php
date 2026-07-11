<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
    function display(){ //defination
        echo "Hello From Function";
    }
    display(); // call 

    function addition($a,$b)//parameters
    {
        echo $a+$b."<br>";
        // return "addition is".$a+$b;
    }
  addition(5,6); //arguments
  addition(50,6);

 
 
  //Varargs   concept used when no of arguments is 
  //increase which means it handle any no of arguments
  function sum(...$a){
    $sum =0;
    foreach($a as $m)
    {
        $sum=$sum+$m;
    }
    echo $sum."<br>";
 }
 sum(10,90);
 sum(5,9,6);
 sum(5,5,10,5);

    ?>
    
</body>
</html>