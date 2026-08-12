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

    array_push($names, "Bob"); //inserting new element in array with array_push method in the ending
    print_r($names);

    array_pop($names); //deleting existing element from the last of an array
    print_r($names);
    array_unshift($names, "JigglyPuff"); //Adding New element from the Starting of Array
    print_r($names);
    array_shift($names); //Removing Existing element from the Starting of Array
    print_r($names);
    sort($numbers);  //Covered sorting in ascending manner
    print_r($names);
    rsort($numbers); //Covered sorting in descending manner
    print_r($names);
    print_r(array_reverse($names)); //Reverse of Array Elements Order
    print_r($names);    
    
</body>
</html>