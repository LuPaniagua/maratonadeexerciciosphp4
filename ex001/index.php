<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($l = 8; $l <= 80; $l+=8){
   echo $l; echo "<br>";
}

$numero = 8;

//Laço for para imprimir a tabuada de 8
for ($i = 1; $i <= 10; $i++){
    //Calcula e imprime o resultado
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}



?>
</body>
</html>
