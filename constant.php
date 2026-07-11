<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define('PI',3.14);
    echo PI;
    $r=12.6;
    $area=PI*$r*$r;
    $cir=2*PI*($r*$r);
    //area of circum

    echo "<br>Area is :".$area;
       echo "<br>Circum is :".$cir;
    /*redeclare constant error
     define('PI',13.94);
    echo PI; */
    //  $a=100;
    //  echo $a;

    ?>
</body>
</html>