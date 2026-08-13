<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function calculate($a, $b, $operator) {

    if ($operator == "+") {
        return $a + $b;
    }
    elseif ($operator == "-") {
        return $a - $b;
    }
    elseif ($operator == "*") {
        return $a * $b;
    }
    elseif ($operator == "/") {
        return $a / $b;
    }
}

echo calculate(10, 5, "+") . "<br>";
echo calculate(10, 5, "-") . "<br>";
echo calculate(10, 5, "*") . "<br>";
echo calculate(10, 5, "/") . "<br>";

?>
    
</body>
</html>