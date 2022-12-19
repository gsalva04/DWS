<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="categoria.css">
    <title>Cine</title>
</head>
<body>
    <?php 

        class Categoria{
            
            function __construct($idCategoria, $nombreCategoria){
                $this->idCategoria = $idCategoria;
                $this->nombreCategoria = $nombreCategoria;
                $this->pintarCategoria();
            }

            function pintarCategoria(){
                echo "<input id='".$this->nombreCategoria."' class='genero' type='submit' name='categoria' value='".$this->idCategoria."'>";
            }

        }

        /** CONEXIÓN BBDD */

        $conexion = mysqli_connect('127.0.0.1', 'root', '12345678');

        if(mysqli_connect_errno()){
            echo "Error al conectar con la BBDD";
        }
    
        mysqli_set_charset($conexion, 'utf8'); //Para que coja los acentos. Especifico tipo de codificación
        mysqli_select_db($conexion, 'Cartelera') or die ("No se encuentra la BBDD");
    
        $consulta = "SELECT * FROM T_Categoria;"; /*where id_Categoria='".$sanitized_categoria_id. "'*;"*/
        $resultado = mysqli_query($conexion, $consulta);

        echo "<div class='general'>";
        echo "<form action='peliculas.php' method='GET'>";
        while($fila = mysqli_fetch_row($resultado)){
            $categoria = new Categoria($fila[0], $fila[1]);
        }
        echo "</form>";
        echo "</div>";       
    ?> 
</body>
</html>

