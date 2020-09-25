<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $paises = array();
        $paises = [];

        $paises[]="españa";
        $paises[1]="francia";
        $paises[2]="porugal";
        $paises[3]="italia";
        
        
        echo "<pre>";
        echo print_r($paises);
        echo "</pre>";
    ?>
</body>