<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $veces6 = 0; //Iniciamos el contador de números 6 a 0.
    $total_num = 0; // Inicializamos el contador total a cero.
    $inicio = microtime(true);
    do {
        $num = random_int(1, 10);
        if ($num == 6) {
            $veces6++; // Cuando aparece un 6 incrementamos el contador.
        } else {
            $veces6 = 0; // Si no aparece un 6 volvemos a poner el contador en cero.
        }
        $total_num++; // El contador total siempre se incrementará.
    } while( $veces6 != 3); // El bucle se ejecutará mientras no haya tres 6 seguidos.
    $fin = microtime(true);
    $tiempo = ($fin - $inicio) * 1000; //Multiplicamos por 1000 ya que el resultado te lo da en segundos.
    echo "Han salido tres 6 seguidos tras generar $total_num números en $tiempo milisegundos.";
    ?>
</body>
</html>