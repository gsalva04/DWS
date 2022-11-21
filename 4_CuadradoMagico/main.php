<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cuadrado Mágico</title>
    <link rel="stylesheet" href="cuadradoMagico.css">
</head>
<body>
    <?php 
    require('cuadradoMagico.php');

    $matriz = array (
        array (4,4,4),
        array (4,2,4),
        array (4,4,4)
    );

    $cuadradoMagico = new CuadradoMagico($matriz);

    $cuadradoMagico->pintarTablero();
    $cuadradoMagico->analizarCuadradoMagico();


    ?>
</body>
</html>

