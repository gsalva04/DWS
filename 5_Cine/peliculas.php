<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= 
    
    <?php
        $categorias = $_GET['categoria'];
        if( $categorias == 1){
            $categoria = "terror.css";
        } else if ($categorias == 2){
            $categoria = "thriller.css";
        }
    echo $categoria?>>

    <title>Películas</title>
</head>
<body>
    <?php 
    class Peliculas{
            
        function __construct($idPelicula, $titulo, $caratula, $duracion, $votos, $sinopsis){
            $this->idPelicula = $idPelicula;
            $this->titulo = $titulo;
            $this->caratula = $caratula;
            $this->duracion = $duracion;
            $this->votos = $votos;
            $this->sinopsis = $sinopsis;
            $this->pintarPelicula();
        }

        function pintarPelicula(){
            echo "<div class='pelicula'>";
            echo    "<div class='izquierda'>";
            echo        "<div class='titulo'>";
            echo            "<h1>$this->titulo</h1>";
            echo        "</div>";
            echo        "<div class='caratula'>";
            echo        "<img src='$this->caratula'></img>";
            echo        "</div>";
            echo        "<div class='duracion'>";
            echo            "<p>Duración: $this->duracion minutos</p>";
            echo        "</div>";
            echo    "</div>";
            echo    "<div class='derecha'>";
            echo        "<div class='votos'>";
            echo            "<p>Votos: $this->votos</p>";
            echo        "</div>";
            echo        "<div class='sinopsis'>";
            echo            "<h2>SINOPSIS:</h2>";
            echo            "<br>";
            echo            "<p>$this->sinopsis</p>";
            echo        "</div>";
            echo        "<div class='verFicha'>";
            echo            "<form action='ficha.php' method='GET'>";
            echo                "<input type='submit' name='ficha' value='VER FICHA'>";
            echo                "<input type='hidden' name='id' value='$this->idPelicula'>";
            echo            "</form>";
            echo        "</div>";
            echo    "</div>";
            echo    "</div>";
        }
    }

    if (isset($_GET['categoria'])){  
        $categorias = $_GET['categoria'];
    }

    /** CONEXIÓN BBDD */

    $conexion = mysqli_connect('127.0.0.1', 'root', '12345678');

    if(mysqli_connect_errno()){
        
        echo "Error al conectar con la BBDD";
    }

    mysqli_set_charset($conexion, 'utf8'); //Para que coja los acentos. Especifico tipo de codificación
    mysqli_select_db($conexion, 'Cartelera') or die ("No se encuentra la BBDD");

    $consulta = "SELECT * FROM T_Peliculas;"; /*where id_Categoria='".$sanitized_categoria_id. "'*;"*/

    $resultado = mysqli_query($conexion, $consulta);

    echo "<div class='general'>";
    while($fila = mysqli_fetch_row($resultado)){
        if($categorias == $fila[7]){
            $pelicula = new Peliculas($fila[0], $fila[1], $fila[5], $fila[3], $fila[6], $fila[4]);
        }
    }
    echo "</div>";

?>
    
</body>
</html>


