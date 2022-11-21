<?php 
    class CuadradoMagico{

        private $matriz;

        function __construct($matriz){
            $this->matriz = $matriz;
        }

        public function pintarTablero(){

            $maxFilas = count($this->matriz);
            
            echo "<div>";
            echo "<table>";

            for($fila = 0; $fila < $maxFilas; $fila++){
                $maxColumnas = count ($this->matriz[$fila]);
                echo "<tr>";
                for($columna = 0; $columna < $maxColumnas; $columna++){
                    echo "<td>".$this->matriz[$fila][$columna]."</td>";
                } 
            
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";
        }

        
        public function analizarCuadradoMagico(){

            $maxFilas = count($this->matriz);

            //SUMA 1ª FILA
            $sumaFila1 = 0;

            for ($i = 0; $i < $maxFilas; $i++) {
                $total += $this->matriz[0][$i];
            }

            $sumaFila1 = $total;

            //SUMA FILAS
            $resultadoFilas = [];

            for ($fila = 0; $fila < $maxFilas; $fila++){
                $resultadoFilas[$fila] = array_sum($this->matriz[$fila]);
            } 

            //SUMA COLUMNAS
            $resultadoColumnas = [];

            for ($columna = 0; $columna < $maxFilas; $columna++){
                $suma = 0;
                for ($fila=0; $fila < $maxFilas; $fila++) { 
                    $suma += $this->matriz[$fila][$columna]; 
                }
                $resultadoColumnas[$columna] = $suma;
            }

            //SUMA DIAGONALES
            $resultadoDiagonal1 = 0;

            for ($i=0; $i < $maxFilas; $i++) { 
                $resultadoDiagonal1 += $this->matriz[$i][$i];
            }

            $resultadoDiagonal2 = 0;
            $contador = $maxFilas - 1;

            for ($i=0; $i < $maxFilas; $i++) { 
                $resultadoDiagonal2 += $this->matriz[$contador][$i];
                $contador--;
            }

            /** ANALIZAR */
            $filasMagicas = true;
            $columnasMagicas = true;
            $diagonal1Magica = true;
            $diagonal2Magica = true;

            $contadorFilas = count($resultadoFilas);
            $contadorColumnas = count($resultadoColumnas);

            //Filas
            for ($i=0; $i < $contadorFilas; $i++) { 
                if($resultadoFilas[$i] != $sumaFila1){
                    $filasMagicas = false;
                }
            }

            //Columnas
            for ($i=0; $i < $contadorColumnas; $i++) { 
                if($resultadoColumnas[$i] != $sumaFila1){
                    $columnasMagicas = false;
                }
            }

            //Diagonales
            if ($resultadoDiagonal1 != $sumaFila1) {
                $diagonal1Magica = false;
            }

            if ($resultadoDiagonal2 != $sumaFila1) {
                $diagonal2Magica = false;
            }

            //Imprimimos información sobre si el cuadrado es mágico o no
            if ($filasMagicas == false || $columnasMagicas == false || $diagonal1Magica == false || $diagonal2Magica == false) {
                echo "<h3 style='color:#FF0000';> NO ES UN CUADRADO MÁGICO <br> </h3>";
                echo "<p>Respecto a la suma de la primera fila que es ".$sumaFila1.",</p>";
                
            }else{
                echo "<h3 style='color:#19ba00';> ES UN CUADRADO MÁGICO <br> </h3>";
            }

            //Imprimimos información sobre filas
            if($filasMagicas == false){
                echo "<p>Las filas diferentes a ".$sumaFila1." son: </p>";
                for ($i=0; $i < $contadorFilas; $i++) { 
                    if($resultadoFilas[$i] != $sumaFila1){
                        echo "<p>  - Fila ".($i+1)."</p>";
                    }
                }
            }

            //Imprimimos información sobre columnas
            if($columnasMagicas == false){
                echo "<p> <br>Las columnas diferentes a ".$sumaFila1." son: </p>";
                for ($i=0; $i < $contadorColumnas; $i++) { 
                    if($resultadoColumnas[$i] != $sumaFila1){
                        echo "<p> - Columna ".($i+1)."</p>";
                    }
                }
            }

            //Imprimimos información sobre diagonales
            if ($diagonal1Magica == false || $diagonal2Magica == false){
                echo "<p><br> Las diagoanles diferentes a ".$sumaFila1." son: </p>";
                if ($diagonal1Magica == false){
                     echo "<p> - 1ª Diagonal</p>";
                }
                if ($diagonal2Magica == false)
                    echo "<p><br> - 2ª Diagonal<p>";
            }
            
            //var_dump($resultadoColumnas);
            
        }
        

}
?>