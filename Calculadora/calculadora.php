<?php 

class Calculadora
        {
            private $num1;
            private $num2;
            private $numeros = [1, 2, 3, 4, 5, 34];

            public function calcularFactorial($num1){

                $factorial = 1; 
                for ($i = 1; $i <= $num1; $i++){ 
                $factorial = $factorial * $i; 
                } 
                
                return $factorial; 
            }

            public function coeficienteBinomial($num1, $num2){

                $resta = $num1 - $num2;

                $calculoInicial = $this->calcularFactorial($resta);

                $multiplicacion = $this->calcularFactorial($num2) * $calculoInicial;

                $formula = $this->calcularFactorial($num1) / $multiplicacion;
                
                return $formula;
            }

            public function convierteBinarioDecimal($num1){

                $solucion = bindec($num1);
                
                return $solucion;
            }

            public function sumaNumerosPares($numeros){

                $result = 0;

                for($i = 0; $i < count($numeros); $i++){
                    if($numeros[$i] % 2 == 0){
                        $result =  $result + $numeros[$i];
                    }
                }

                return $result;
            }

            public function esCapicua($cadena){
                return (strrev($cadena) == $cadena);
            }

            public function sumaMatrices(){
                $matriz1 = array(
                array(2,0,1),
                array(3,0,0),
                array(5,1,1)
                );
                $matriz2 = array(
                array(1,0,1),
                array(1,2,1),
                array(1,1,0)
                );
                $suma = array(); // Iniciamos la matriz de resultados
                
                if(count($matriz1) == count($matriz2)){ // Verificamos que las 2 matrices tengan el mismo tamaño de filas

                    for($i=0; $i<count($matriz1); $i++){ // Recorremos cada fila
                        $suma[] = array(); // Creamos una entrada por cada fila
                        if( count($matriz1[$i])==count($matriz2[$i])){ // Verificamos que las 2 matricies tengan las mismas columnas
                            for($j=0; $j<count($matriz1[$i]); $j++){ // Recorremos las columnass
                                $suma[$i][] = $matriz1[$i][$j]  + $matriz2[$i][$j]; // Realizamos la suma
                            }
                        }
                    }
                }

                echo "<pre>";
                print_r($suma);
                echo "</pre>";

            }
        }
