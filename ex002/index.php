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

$soma = 0;
$numeros= [];

//Laço para gerar 1 números inteiros aleatórios
for ($i = 1; $i <= 10; $i++){
    //Gera um número aleatório entre 1 e 100
    $numero = rand(1,100);

    //Adiciona o número à lista
    $numeros[] = $numero;

    //Adiciona o número à soma
    $soma += $numero;
}

//Exibe os 10 números gerados
echo "Os 10 números gerados são : " . implode(",", $numeros) . "<br>";

//Calcula a média
$media = $soma / 10;

//Exibe a média
echo "A média dos 10 números é: " . $media . "<br>";
?>

</body>
</html>
