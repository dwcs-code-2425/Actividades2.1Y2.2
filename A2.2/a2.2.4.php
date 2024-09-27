<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $contador = 0;
    do {
        $tirada = rand(1, 6);
        echo "<p> A tirada é un $tirada</p>";
        $contador++;
    } while ($tirada != 5);
    echo "Obtívose un 5 tras $contador tiradas";
    ?>
</body>

</html>