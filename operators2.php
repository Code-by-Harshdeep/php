<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators2</title>
</head>
<body>
    <?php 
        /* 
    Logical
    &&  and
    ||   or
    !    not
    */
    $a=50;
    $b=20;
    if($a>40 && $b>10)
        echo "Hello";
    else
        echo "BYe";
 //both are same we can use 1.&&  or  2.and 
     if($a>40 and $b>10)
        echo "Hello";
    else
        echo "BYe";

    if($a>40 || $b>10)
        echo "Hello Friends";
    else
        echo "BYe Friends";

// another case
    if($a and $b) //(10 && 20) result as true unless variable holds 0 value in it
        echo "Hello Friends";
    else
        echo "BYe";

    //Short circuit Operator both in (&& and || or  not !)  Case
    $a=10;
    $b=5;
      if(++$a>40 && ++$b>5)
        echo "Hello Friends";
    else
        echo "BYe Friends";

    echo $a."<br>"  ; //result as 11
    echo $b ;         //result as still 5 because short circuit due to and operator 
   
     $a=70; 
    $b=5;
      if(++$a>40 || ++$b>5)
        echo "Hello Friends";
    else
        echo "BYe Friends";

    echo $a."<br>" ;  //result as 71
    echo $b ;         //result still as 5 due to short circuit problem


    $a=50; 
    $b=4;
      if(!(++$a>40 || ++$b>5))
        echo "Hello Friends";
    else
        echo "BYe Friends";

    echo $a."<br>" ;  //result as 71
    echo $b ;         //result still as 5 due to short circuit problem
   
   
 //another case in (Not)
    $a=20; 
    $b=!$a;

    echo $a."<br>" ; 
    echo $b ;
    
    ?>
</body>
</html>