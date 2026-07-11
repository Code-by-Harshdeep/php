<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators3</title>
</head>
<body>
    <?php 
    /* 
    string Operator(concat)
    */

    //concatenate
    $a=100;
    echo "Value is :".$a."<br>";
    
    //another concatenate with assignment
     $a=100;
    $str ="hello";
    $str.=$a; //$str= $str+$a
    echo $str ; //hello100

    echo "<br>";
    //another concatenate example
    $a=100;
    $b =10;
    $b.=$a; //10 + 100 =10100
    echo $b ; //10100
   //. dot always perform concatenation not addition
 

   /*
   Conditonal Assignment Operator
    ? :
   */
   $a=50;
   $b=100;
   $str= $a>$b ?"first No is Greater" :"Second No is Greater";
   //    true : false
   echo $str;

   //Another Case
   $str =500?"Hello":"Bye";
   echo $str;
    ?>
</body>
</html>