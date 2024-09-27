<?php echo "Introduza a cualificación numérica: \n";
fscanf(STDIN, "%f", $n);
//Si se usa 9,5 con coma, se lee $n=9
//Si se usa 9.5 con punto, se lee $n=9.5
echo "Leído: $n\n";
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
//  //Haciendo conversión a entero con (int) o intval()
    switch ((int)$n) {
        case 10:
            echo "<p>Matrícula de honra</p>";
            break;
        case 9:
            echo "<p>Sobresaínte</p>";
            break;
        case 8:
        case 7:
            echo "<p>Notable</p>";
            break;
        case 6:
        case 5:
            echo "<p>Aprobado</p>";
            break;
        default:
            echo "<p>Suspenso</p>";
            break;
    }
    
    ?>
</body>

</html>