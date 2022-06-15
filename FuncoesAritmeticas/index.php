<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function Somar(int $a, int $b){
        return ($a + $b);
    }
    function Subtrair(int $a, int $b){
        return ($a - $b);
    }
    function Multiplicar(int $a, int $b){
        return ($a * $b);
    }
    function Dividir(int $a, int $b){
        return ($a / $b);
    }
    function Potencia(int $a, int $b){
        return pow($a, $b);
    }
    $valor_x = $_GET['X'];
    $valor_y = $_GET['Y'];
    $opcao   = $_GET["opcao"];
    
    switch(strtolower($opcao)){
        case "somar":
            echo Somar($valor_x,$valor_y);
            break;
           
        case "subtrair":
            echo Subtrair($valor_x,$valor_y);;
            break;
        case "multiplicar":
            echo Multiplicar($valor_x,$valor_y);
            break;
        case "dividir":
            echo Dividir($valor_x,$valor_y);
            break;
        case "potencia":
            echo Potencia($valor_x,$valor_y);
            break;
            
    }
    /*$sum = Somar($_GET["a"],$_GET["b"]);
    $sub = Subtrair($_GET["a"],$_GET["b"]);
    $mult = Multiplicar($_GET["a"],$_GET["b"]);
    $div = Dividir($_GET["a"],$_GET["b"]);
    $pot = Potencia($_GET["a"],$_GET["b"]);

    echo "SOMA => $sum<br>";
    echo "SUBTRAI => $sub<br>";
    echo "MULTIPLICA => $mult<br>";
    echo "DIVIDE => $div<br>";
    echo "POTÊNCIA => $pot<br>";
    */
    ?>
</body>
</html>