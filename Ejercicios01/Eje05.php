<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> 
table {
    border-collapse: collapse;   /* evita bordes dobles entre celdas */
}
th, td {
    border: 1px solid black;     /* línea de 1px, sólida, en negro */
    padding: 8px;                /* espacio interior para que no quede apretado */
}
</style>
<body>
    <table>
        <thead>
            <tr>
                <th style="color: blue;">Operación</th>  
                <th style="color: blue;">Resultado</th> 
            </tr>
            </thead>
            <tbody>
    <?php 
$num1 = random_int(1,10);
$num2 = random_int(1,10);
    ?>
<tr>
<td> <?php echo $num1. '+' .$num2. " = "; ?> </td>
<td> <?php echo ($num1 + $num2); ?></td>
</tr>
<tr>
<td> <?php echo $num1. '-' .$num2. " = "; ?> </td>
<td> <?php echo ($num1 - $num2); ?></td>
</tr>
<tr>
<td> <?php echo $num1. '*' .$num2. " = "; ?> </td>
<td> <?php echo ($num1 * $num2); ?></td>
</tr>
<tr>
<td> <?php echo $num1. '/' .$num2. " = "; ?> </td>
<td> <?php echo round($num1 / $num2, 2); ?></td>
</tr>
<tr>
<td> <?php echo $num1. '**' .$num2. " = "; ?> </td>
<td> <?php echo ($num1 ** $num2); ?></td>
</tr>
<!-- Generamos un código php que calcula distintas operaciones matemáticas 
 y las almacena en varias celdas de la tabla. -->
    </tbody>
    </table>
</body>
</html>