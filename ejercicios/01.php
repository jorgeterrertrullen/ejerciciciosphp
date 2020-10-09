<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = "jorge";
    $Appelidos = "terrer";
    $edad = 22;
    $telefono = 63839303;
    $email = "jorge@gmail" . "." . "com";
    ?>

    <table>
        <tr>
            <td>NOMBRE</td>
            <td><?php echo $nombre ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?php echo $Appelidos ?></td>
        </tr>
        <tr>
            <td>telefono</td>
            <td><?php echo $telefono ?></td>
        </tr>
        <tr>
            <td>edad</td>
            <td><?php echo $edad ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email ?></td>
        </tr>
    </table>
</body>
</html>
