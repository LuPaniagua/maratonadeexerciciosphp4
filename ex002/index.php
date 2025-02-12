<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$soma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}

$media = $soma / count($numeros);

echo "A média dos números é: " . $media;
?>

</body>
</html>