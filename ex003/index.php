<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $carro = ["Satoru", "Leonardo","Paul", "Vincent", "Elliot","Uraraka","Verônica", "Calebi","Deku","John"];

    foreach($carro as $carros){
        echo $carros . "<br>";
    }
    //Array com os nomes das peças de carro
$pecasCarro = array[
    "Motor", "Roda", "Pneu", "Freio", "Suspensão", "Bateria", "Radiador", "Alternador", "Filtro de ar", "Direção"];

//Utilizando foeach para imprimir cada nome em uma lista
echo "<ul>";
foreach ($pecasCarro as $peca) {
    echo "<li>" . $peca . "</li>";
}
echo "</ul>";

    ?>
</body>
</html>
