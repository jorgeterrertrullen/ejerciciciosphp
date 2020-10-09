<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        if($operador| $operando1 | $operando2==""){
            echo "No es valido";
        }else
        echo "La solución es: ".$solucion;
        
    ?>
</body>
</html>