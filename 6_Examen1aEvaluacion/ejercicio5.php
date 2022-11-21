<?php

//Apartado 5a
define("MAX_VALUE",10);
define("MIN_VALUE",3);

function numerosAltos($v,$n)
{
    $numero_elementos = count($v);
    if (($numero_elementos>MAX_VALUE) || ($numero_elementos<MIN_VALUE))
    {
        throw new Exception('El número de elementos del array ha de estar entre [3,10]');
    }

    rsort($v); //ordenación descendente
    $vector_resultado = array();

    for ($i=0;$i<$n;$i++)
    {
        $vector_resultado[$i] = $v[$i];
    }

    return $vector_resultado;
}

//Apartado 5b

function test()
{
    $vector = array(5,0,8,9);
    $resultado_esperado = array(9,8,5);

    $vector_resultado = numerosAltos($vector,3);

    return ($vector_resultado==$resultado_esperado);
}


var_dump(test());