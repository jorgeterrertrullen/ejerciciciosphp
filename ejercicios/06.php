<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $jugadores = array("pepe", "mario", "jaime" ,"jorge");
        foreach ($jugadores as $value) {
            echo "<ul><li>" . $value ."</li></ul>";
        }
    ?>
</body>
</html>