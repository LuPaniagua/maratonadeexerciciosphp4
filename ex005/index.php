<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function valorfinal ($preço, $desconto){
        return $preço - ($preço * $desconto);
    }

        $valorfinal = valorfinal(5000, 40);
        echo "O valor final da sua compra é: " . $valorfinal;
    



    ?>
</body>
</html>
