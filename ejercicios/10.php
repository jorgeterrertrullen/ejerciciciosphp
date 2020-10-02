<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=php, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$posiciones = array(
    "Pepe" => "base",
    "Alex" => "Escolta",
    "Jorge" => "Alero",
    "Carlos" => "Alapivot",
    "jaime" => "Pivot",
);

foreach ($jugadores as $jugador => $posicion) {
    echo "El" . $jugador . "es" . $posicion;
};

?>
</body>
</html>