<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name="Php";
    echo (strtoupper($name));
     echo (strtolower($name));
     $word=" Kenny k   ";
     echo (trim($word));
    echo (str_replace("Kenny","James",$word));
    echo (strlen($name));
    echo (strrev($name));
    ?>
</body>
</html>