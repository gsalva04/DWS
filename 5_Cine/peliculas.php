<?php 
    class Categoria{

        private $categoria;

        function __construct($categoria){
            $this->categoria = $categoria;
        }

        public function pintarCategoria(){
            echo "<form action='peliculas.php' method='get'>
            <input id='$this->categoria.' type='submit' name=".$this->categoria.">
            </form>";
        }
    } 

    echo $_GET['terror'];
    
?>