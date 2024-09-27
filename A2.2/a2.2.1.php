<?php


echo "Introduza un enteiro: \n";
fscanf(STDIN, "%d",$n);
$suma = 0; 
for($i=1; $i<2*$n; $i+=2){
    //$suma = $suma + $i;   
    $suma  += $i;
}



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo "<p>A suma vale $suma</p>";
   
   ?>
</body>

</html>