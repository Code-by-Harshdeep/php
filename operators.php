<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
    // $a=10;  //int
    // $b='10'; //string
    // echo($a==$b) ;
    // echo "<br>";
    // echo ($a===$b);

    // $a=10;
    // $b=15;
    // echo($a!=$b) ; //true
    // echo "<br>";
    // echo ($a!==$b); // true
    // echo "<br>";

    $a=10;
    $b=15;
    echo($a<>$b) ; //true  //it is also a not eqaul to operator
    echo "<br>";
   ;

   //spaceship operator result in -1 ,0, 1
      $a=10;
    $b=15;
    echo($a<=>$b) ; //true  //it is also a not eqaul to operator
    echo "<br>";
   ;
   
  

    // if($a==$b==$c)
    //     echo "Hello";
    // else
    //     echo "bye bye";
    //this will result in error becuase we cannot compare three values simultanesouly
    //beacuse it  return boolean value
    // to fix this we can do something like
    $a=50;
    $b=50;
    $c=50;
    if(($a==$b)==$c){
        echo "Hello";
        echo "<br>";}
    else
        echo "bye bye";


    //++ increment
    //-- decrement
    echo "Pre-Increment A is ".++$a;
     echo "<br>";
      $a++;
     echo "post Increment A is ".$a;
     echo "<br>";

     //more clarity in increment and Decrement
     //Case 1:
    //  $num1=50;
    //  $num2 =++$num1;  //first incremnet then assign
    //  echo "NUM1 =".$num1;
    //  echo "NUM2 =".$num2;
    //  echo "<br>";
     
    //Case 2:
    //   $num1=50;
    //  $num2 =$num1++;   //first assign then increment
    //  echo "NUM1 =".$num1;
    //  echo "NUM2 =".$num2;
    //  echo "<br>";

     //increment operator with new e.g
     //Case :1  pre increment
    //  $num3=50;
    //  if(++$num3>50);
    //     echo "hello";
    // else
    //     echo "Bye";
     //Case :2   post increment
    // $num3=50;
    //  if($num3++>50){
    //     echo "hello";}
    // else
    //     echo "Bye";

    //Another example
    //case 1
    // $num1=5;
    // $num2= ++$num1 + $num1++ ;
    // //   6+6
    // echo "NUM1=".$num1. "<br>";
    // echo "NUM2=".$num2. "<br>";
   
    //case 2:
     $num1=5;
    $num2= ++$num1 + $num1++ + ++$num1;
    //         6       6          8    6+6+8=20
    // echo "NUM1=".$num1. "<br>";
    // echo "NUM2=".$num2. "<br>";


    /*
     unary ++a , --b , ~a
     Binary which accepts minimum two operands to perform operation
     Ternary
     ? :   are ternary operators
    */
    //  echo (10+10)."<br>";
    //  echo (10-10)."<br>";
    //  echo (10*10)."<br>";
    //  echo (10/10)."<br>";
    //  echo (10**2)."<br>";
    //  echo (10%10)."<br>";


     /*
     Types of Operators in Php
     Arithmetic Operators eg:-  +,-,*,/,**,%
     relational Operators eg: < , > , >= ,<= , !=, ==, ===, !== ,<>,<=>
     Assignment Operators
     Increment/decrement Operators
     Logical Operators
     String Operators
     Array Operators
     Conditional assignment Operators
     */

    ?>
    
</body>
</html>