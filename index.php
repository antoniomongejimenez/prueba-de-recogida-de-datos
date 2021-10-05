<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de entrada de datos</title>
</head>
<body>
    <h1>Prueba de entrada de datos</h1>
    <?php if (isset($_GET['x'])):?>
        <p>El valor del parámetro x es: <?= $_GET['x'] ?></p>
    <?php else: ?>
        <p>No hay valor de x</p>
    <?php endif ?>

    <?php if (isset($_GET['y'])):?>
        <p>El valor del parámetro y es: <?= $_GET['y'] ?></p>
    <?php else: ?>
        <p>No hay valor de y</p>
    <?php endif ?>

    <?php if (isset($_GET['x'], $_GET['y'])): ?>
        <p>La suma vale <?= $_GET['x'] + $_GET['y'] ?></p>
    <?php endif ?>
</body>
</html>