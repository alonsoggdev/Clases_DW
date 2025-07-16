<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 2;
        $b = 3;
        $suma = $a + $b;
        echo $suma;

        if ($suma > 4)
        {
            echo "<p>La suma es mayor que 4</p>";
        }
        else if ($suma == 4) {
            echo "<p>La suma es igual a 4</p>";
        }
        else {
            echo "<p>La suma es menor o igual a 4</p>";
        }

        $array = ["a", "b", "c"];

        foreach ($array as $i) {
            echo "<p>Number: $i</p>";
        }
    ?>
</body>
</html>