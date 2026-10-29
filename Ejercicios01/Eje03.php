<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        pre { font-size: 24px; } /*  Tamaño de la letra. */
        pre {font-family: monospace} /* Tipo de letra para dejar mínimos espacios. */
    </style>
<body>
    <?php 
$total_filas = random_int (1, 9);
    ?>

    <p>Número generado: <b><?php echo $total_filas; ?></b></p>

    <pre>
    <?php 
    for ($i = 1; $i <= $total_filas; $i++) {
        $posicion = (2*$i)-1; 
        $num_espacios = ($total_filas - $i);
        $num_asteriscos = str_repeat('*', $posicion); // Repetimos los asteriscos en cada posición.
        $total_espacios = str_repeat(' ', $num_espacios); // Repetimos un espacio el número de veces necesario.
        echo "<span>$total_espacios $num_asteriscos </span>\n"; // Imprimimos las cadenas.
    }
    ?>
    </pre>
</body>
</html>