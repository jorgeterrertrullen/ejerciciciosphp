<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formpost.php" method="post">
        Nombre: <input type="text" name="nombre" minlength="3"><br>
        <input type="submit" value="Enviar">
        
    </form>

    <?php
    print "<pre>"; print_r($Respuesta); print "</pre>";

    if ($Respuesta["nombre"] == "") {
        print "<p>No ha escrito ningún nombre</p>";
    } else {
        print "<p>Hola bienvenido".$Respuesta."</p>";
    }
    ?>
</body>
</html>