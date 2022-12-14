<?php


function pintarMatriz($matriz)
{
    for ($i = 0; $i <count($matriz); $i++) 
    {
        for ($j = 0; $j <count($matriz); $j++)
        {
            print $matriz[$i][$j];    
        }
        print "<br>";
    }
}

function obtenerIndiceFilaMejorPromedio($matriz)
{
    $filas = count($matriz);
    $promedio_max = PHP_INT_MIN;
    $fila_promedio_max = -1;

    for ($i = 0; $i < $filas; $i++)
    {
        $columnas = count($matriz[$i]);
        $suma_fila = 0;
        for ($j = 0; $j < $columnas; $j++)
        {
            $suma_fila+=$matriz[$i][$j];
        }
        $promedio = $suma_fila / $columnas;
        if ($promedio>$promedio_max)
        {
            $promedio_max = $promedio;
            $fila_promedio_max = $i;
        }
    }
    return $fila_promedio_max;
}


$matriz = array(
                array(4,9,2),
                array(3,5,8),
                array(8,1,1));

pintarMatriz($matriz);

$fila_promedio_maximo = obtenerIndiceFilaMejorPromedio($matriz);

echo "la fila con el promedio maximo es ".$fila_promedio_maximo;