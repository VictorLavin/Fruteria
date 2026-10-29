<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
        pre { font-size: 24px; }
        .rojo { color: red; } /* Asignamos a una variable el color rojo. */
        .azul { color: blue; } /* Asignamos a otra variable el color azul. */
    </style>
<body>
    <?php 
$aleatorio = random_int (1, 9);
    ?>

    <p>Número generado: <b><?php echo $aleatorio; ?></b></p>
    <?php
for ($i = 0; $i <= $aleatorio; $i++) {
    $color = ($i % 2 == 0) ? "azul" : "rojo"; # Si módulo 2 es cero será color azul, sino será rojo.
    $fila = str_repeat($i , $i); # Repetimos el número generado 
    echo "<span class=\"$color\">$fila</span></br>";

}
?>
</body>
</html>