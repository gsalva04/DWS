<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Desarrollo de aplicaciones web en entorno servidor</title> 
</head>
<body>

<div>

<form method="get" action="calculadora.php">
            <input type="text" name="operando1">
            <select name="operador">
                <option value="+">+
                </option>
                <option value="-">-
                </option>
                <option value="*">*
                </option>
                <option value="/">/
                </option>
            </select>
            <input type="text" name="operando2">
            <input type="submit" value="enviar">
        </form>
</div>

<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}
	echo "La solución es: ".$solucion;
?>


</body>
</html>

