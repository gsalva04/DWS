<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Desarrollo de aplicaciones web en entorno servidor</title> 
</head>
<body>

<div>
    <?php

    function validarParametroNoombre()
    {
        $res="-";
        $name = htmlspecialchars($_GET["name"]);

        if (isset($name)){  //isset: nos permite evaluar si una variable está definida o no.
            $res = $name;
        }

        return $res;
    }
    //En el ejemplo 10 está terminado
    ?>
</div>
</body>
</html>

