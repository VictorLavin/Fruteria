<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="estilo.css" rel="stylesheet" type="text/css" />
<title>LA FRUTERIA - Despedida</title>
</head>
<body>
<H1> La Frutería del siglo XXI</H1>
<div class="container">
    <div class="compra-detalle">
        <?= isset($compraRealizada) ? $compraRealizada : '<p>No se registró ninguna compra.</p>' ?>
    </div>

    <div class="mensaje-principal">¡Muchas gracias por su pedido! Vuelva pronto 💚!</div>

    <input type="button" value=" NUEVO CLIENTE " onclick="location.href='index.php'">
</div>
</body>
</html>