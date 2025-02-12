<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = 17;

    function primo($a){
        if ($a <=1){
            return false;
        }
        for ($i = 2; $i < $a; $i++){
            if ($i % $a == 0){
                return false;
            }
        }
        return true;
    }

    if (primo($numero)){
        echo "$numero é um número primo.";
    } else {
        echo "$numero não é um número primo.";
    }




?>
    
</body>
</html>