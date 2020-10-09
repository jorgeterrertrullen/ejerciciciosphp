<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formpost.php" method="post">
        Titulo: <input type="text" name="titulo"><br>
        Autor: <input type="text" name="autor"><br>
        Editorial: <input type="text" name="editorial"><br>
        <input type="submit" value="Enviar">
        <?php
        $titulo = $_GET['titulo'];
        $autor = $_GET['autor'];
        $editorial = $_GET['editorial'];
        
        $array = array(
            $titulo,$autor,$editorial

        );
        echo $array;

        ?>
</body>
</html>