<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $gatos = ["Siamês" => "Mimi",
    "Persa" => "Bee Ges",
    "Maine" => "Bolinha",
    "Ragdoll" => "Grafite",
    "Abissínio" => "Pitó"  
];

foreach ($gatos as $raça => $nome){
   echo "$nome tem a raça chamada : $raça. <br>";
}
    
    
    
    ?>
</body>
</html>