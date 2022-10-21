<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadorar</title> 
</head>
<body>

    <div>

    <form method="get" action="calculadora_usuarios.php">
                <input type="text" name="operador1">
                <select name="operador">
                    <option value="-" selected>-</option>
                    <option value="Factorial">Factorial</option>
                    <option value="Binomial">Binomial</option>
                    <option value="BinDec">Binario a Decimal</option>
                    <option value="arrayPares">Sumar Array (Pares)</option>
                    <option value="capicua">Nombre Capicua</option>
                    <option value="matrices">Suma Matrices</option>
                </select>
                <input type="text" name="operador2">
                <input type="submit" value="enviar">
            </form>
    </div>
    
    <div>
        <?php
        require('calculadora.php');

        $calculadora = new Calculadora();

        $operador = $_GET['operador'];
        $numero1 = $_GET['operador1'];
        $numero2 = $_GET['operador2'];


        if($operador == "Factorial"){

            if($numero1 < 0){
                echo "ERROR: numero negativo";
            } else{
                $solucion = $calculadora->calcularFactorial($numero1);
                echo "La solución factorial es: ".$solucion;
            }

        } else if($operador == "Binomial"){

            if($numero1>$numero2 || $numero1 < 0 || $numero2 < 0){
                echo "ERROR: numero negativo";
            } 
            else{
                $solucion2 = $calculadora->coeficienteBinomial($numero1, $numero2);
                echo "La solución binomial es: ".$solucion2;
            }
            
        } else if ($operador == "BinDec"){
            $solucion = $calculadora->convierteBinarioDecimal($numero1);
            echo "La solución de BINARIO a DECIAMAL es: ".$solucion;
        }

        else if ($operador == "arrayPares"){
            $numeros = [1, 2, 3, 4 ,6 ,7 ,8 ,9 ,10];
            echo "La suma de los numeros pares del array es ".$calculadora->sumaNumerosPares($numeros);
        } 

        else if ($operador == "capicua"){
            $palabra = "arepera";
            $solucion = $calculadora->esCapicua($palabra);
            if($solucion = true){
                echo "La palabra ".$palabra." es capicua";
            } else 
                echo "La palabra no ".$palabra." es capicua";
        } 
        else if ($operador == "matrices"){

            echo $calculadora->sumaMatrices();
        } 

        ?>
    </div>

</body>
</html>

