<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $jugadores = array();
        $jugadores = [];

        $jugadores[]="pepe";
        $jugadores[1]="mario";
        $jugadores[2]="jaime";
        $jugadores[3]="jorge";
        
        
        foreach ($jugadores as $value) {
            echo "<ul><li>" . $value ."</li></ul>";
        }
    ?>
</body>
</html>