<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="votos.css">
    <title>Document</title>
</head>
<body>
    <?php
        echo " <div class='general'>
        </div>";

        if (isset($_POST['id'])){  
            $idPelicula = $_POST['id'];
        }

        echo "El id del voto es ".$idPelicula;

        $conexion = mysqli_connect('127.0.0.1', 'root', '12345678');

        if(mysqli_connect_errno()){
            echo "Error al conectar con la BBDD";
        }
    
        mysqli_set_charset($conexion, 'utf8'); //Para que coja los acentos. Especifico tipo de codificación
        mysqli_select_db($conexion, 'Cartelera') or die ("No se encuentra la BBDD");
    
        $consulta = "UPDATE T_Peliculas SET votos = votos+1 WHERE id_Pelicula = $idPelicula;"; 
    
        $resultado = mysqli_query($conexion, $consulta);

        echo "<h1>VOTO REALIZADO CON EXITO</h1>";
    ?>

</body>
</html>