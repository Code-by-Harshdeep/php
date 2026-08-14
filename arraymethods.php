<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $names = ["Alice", "James", "Kevin"];
    echo $names[0];  //Accesing specific element in array by indexing

   echo count($names); //Counting elements in array with count method

   array_push($names, "Bob"); //inserting new element in array with array_push method

      print_r($names);
    ?>
    
</body>
</html>