<?php
//dúas formas de definir constantes:
const RATIO_CM_PULGADAS = 2.54;
define('RATIO_PULGADAS_PIES', 12);

echo "Introduza a altura en centímetros\n";
fscanf(STDIN, "%f", $altura);
$polgadas = $altura / RATIO_CM_PULGADAS;
$pes = $polgadas / RATIO_PULGADAS_PIES;


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo "<p>A altura en pulgadas é: $polgadas</p>";
    echo "<p>A altura en pés é: $pes</p>"; ?>
</body>

</html>