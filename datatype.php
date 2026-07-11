<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning php</title>
</head>
<body>
    <marquee behavior="" direction="" >Learning</marquee>
    <?php 
    class Test{

    }
    $a=150;  //int
    echo $a."<br>";
    $b=23.56; //float
    echo $b."<br>";
    $c="Hello"; // String
    echo $c."<br>";
    $d=TRUE; //boolean but always need to write in capital
    echo $d."<br>";
    $arr=array("Ludhiana","Ferozpur","Bathinda");  //array
   //function to print array is print_r
   print_r($arr);
    $e=null; //null data type
    echo $e."<br>";
    // t=new Test();


    /*
    Data types in PHP

    int
    float
    string
    boolean
    array
    object

    */

      $num1=150; 
      $num2=100; 
      if($num1>$num2){
        echo "Number 1 is Greater : ".$num1;
      }
      else{
        echo "Number 2 is Greater".$num2;
      }

?>
</body>
</html>
