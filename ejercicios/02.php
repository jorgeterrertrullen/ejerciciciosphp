<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    $number = 8;
    for ($i = 1; $i <= 10; $i++) {
    $RESULTADO = $i * $number;
    echo "<table border=1>";
    echo "<tr>". "<td>". $i . "</td>" . "<td>". "x" . "</td>" ."<td>". $number . "</td>"."<td>". "=" . "</td>" . "<td>". $RESULTADO . "</td>";
    echo "</table>";  
    };
    
    ?>
</body>
</html>