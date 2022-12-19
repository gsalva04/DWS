<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ficha.css">
    <title>Ficha</title>
</head>
<body>
    <?php 
           class Ficha{
            
            function __construct($idFicha, $caratula, $titulo, $año, $director, $reparto, $duracion, $sinopsis, $votos){
                $this->idFicha = $idFicha;
                $this->caratula = $caratula;
                $this->titulo = $titulo;
                $this->año = $año;
                $this->director = $director;
                $this->reparto = $reparto;
                $this->duracion = $duracion;
                $this->sinopsis = $sinopsis;
                $this->votos = $votos;

                $this->pintarFicha();
            }
    
            function pintarFicha(){
                echo "<div class='ficha'>";
                echo    "<div>";
                echo        "<div class='caratula'>";
                echo        "<img src='img/caratulas/thriller/hastaElCielo.jpeg'></img>";
                echo        "</div>";
                echo    "</div>";
                echo    "<div class = 'datos'>";
                echo        "<div class='titulo'>";
                echo            "<h1>$this->titulo<h1>";
                echo        "</div>";
                echo        "<div class='subtitulo'>";
                echo            "<h2>$this->año</h2>";
                echo        "</div>";
                echo        "<div class='subtitulo'>";
                echo            "<p>Director: $this->director</p>";
                echo        "</div>";
                echo        "<div class='subtitulo'>";
                echo            "<p>Reparto: $this->reparto</p>";
                echo        "</div>";
                echo        "<div class='subtitulo'>";
                echo            "<p>Duración: $this->duracion minutos</p>";
                echo        "</div>";
                echo        "<div class='subtitulo'>";
                echo            "<p>$this->sinopsis</p>";
                echo        "</div>";
                echo        "<div class='subtitulo'>";
                echo            "<p>Total Votos: $this->votos </p>";
                echo        "</div>";
                echo        "<div>";
                echo        "<form action='votos.php' method='POST'>";
                echo           "<input type='submit' name='voto' value='VOTAR'>";
                echo           "<input type='hidden' name='id' value='$this->idFicha'>";
                echo        "</form>";
                echo        "</div>";
                echo     "</div>";
                echo "</div>";
            }
    
        }

        if (isset($_GET['id'])){  
            $id = $_GET['id'];
        }

        /** CONEXIÓN BBDD */

        $conexion = mysqli_connect('127.0.0.1', 'root', '12345678');

        if(mysqli_connect_errno()){
            echo "Error al conectar con la BBDD";
        }
    
        mysqli_set_charset($conexion, 'utf8'); //Para que coja los acentos. Especifico tipo de codificación
        mysqli_select_db($conexion, 'Cartelera') or die ("No se encuentra la BBDD");
    
        $consulta = "SELECT p.id_Pelicula, p.titulo, p.año, p.sinopsis, p.duracion, p.votos, a.actor, d.director

                    FROM T_Peliculas AS p LEFT JOIN
                    T_Peliculas_Actores AS ap ON p.id_Pelicula = ap.id_pelicula LEFT JOIN
                    T_Actores AS a ON ap.id_Actor = a.id_Actor LEFT JOIN
                    T_Peliculas_Directores AS dp ON dp.id_Pelicula = p.id_Pelicula LEFT JOIN
                    T_Directores AS d ON d.id_Director = dp.id_Director;"; 
        
        $resultado = mysqli_query($conexion, $consulta);
        
        echo "<div class='general'>";
        if(($resultado->num_rows) > 0){
            while($fila = mysqli_fetch_assoc($resultado)){
                if($id == $fila['id_Pelicula']){
                    $ficha = new Ficha($fila['id_Pelicula'], $fila['imagen'], $fila['titulo'], $fila['año'], $fila['director'], $fila['actor'], $fila['duracion'], $fila['sinopsis'], $fila['votos']);
                }
            }
        }
        echo "</div>";
        
    ?>

</body>
</html>