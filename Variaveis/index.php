<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"/>
    <title>Document</title>
</head>
<body>
<?php
    class Constantes
    {
     const MIN_VALUE = 0.0;
     const MAX_VALUE = 1.0;
     
     public static function getMIN_VALUE()
     {
        return self::MIN_VALUE;
     }
     public static function getMAX_VALUE()
     {
        return self::MAX_VALUE;
     }
    }

    $min = Constantes::getMIN_VALUE();
    $max = Constantes::getMAX_VALUE();

    echo "$min <br>";
    echo "$max <br>";
    
    const X = 1.1;
    foo();
    function foo() {
        echo "Value of X: " . X . "<br>";
        if (is_int(X)){
            echo X . ": TRUE";
        }
        else{
            echo "FALSE";
        }
    }
    
    $x_bool = TRUE;
    $x_str = "Teste";
    $x_str2 = 'Teste';
    $x_int = 12;
    $x_float = 12.2;
    
    echo "<h2>Olá, mundo</h2> <br> Boolean $x_bool <br> String  $x_str <br> String 2 $x_str2 <br> Inteiro $x_int <br> $x_float"

    
    
?>    
</body>
</html>