<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formpost.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="text" name="edad"><br>
        <input type="submit" value="Enviar">
        </form>

        <?php
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        print "<li>Su nombre es $nombre</li>\n";
        print "<li>Su edad es $edad</li>\n";
        
        ?>
</body>
</html>