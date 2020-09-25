<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
<?php
    $numero = 3;
    $divi=0;
    
   for ($i = 1; $i <= $numero; $i++) {
       if ($numero %$i == 0) {
           echo $i . "  " . "es divisores de  " . $numero . "<br>" ;
           $divi ++;
       }
   };
   if ($divi <= 2) {
    echo "es primo";
}
   ?>
</body>
</html>