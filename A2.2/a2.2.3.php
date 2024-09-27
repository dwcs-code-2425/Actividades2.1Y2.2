<?php


echo "Introduza un enteiro: \n";
fscanf(STDIN, "%d", $n);





?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<p> Lista de divisores do número $n: </p>";
  
    echo "<ul>";
    for ($i = floor($n / 2); $i >=2; $i--) {
        if ($n % $i == 0) {
            echo "<li>$i</li>";
        }
    }

    echo "<li>1</li>";

    echo "</ul>"
    ?>
</body>

</html>